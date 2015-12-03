<?php
namespace Credite\Datatable;

class DocumenteNecesareController extends \Datatable\DatatableController
{
    protected $layout = 'template.layout';
    
    protected $types = [
        '1' => ['column' => 'id_document_necesar', 'caption' => 'Documente',],
        '2' => ['column' => 'id_manual', 'caption' => 'Manuale'],
        '3' => ['column' => 'id_instructiuni', 'caption' => 'Instrucțiuni',],
        '4' => ['column' => 'id_acte_produse', 'caption' => 'Acte',]
    ];

    public function index($id, $id_filter, $type){
        if( ! ($banca = \Credite\Banca::getRecord( (int) $id_filter)) )
        {
            return \Redirect::route('grid_banci');
        }
        $config = \Credite\Grids::make($id)->toIndexConfig($id);
        $config['breadcrumbs'] = [
            [
                'name' => 'Bănci',
                'url'  => "grid_banci",
                'ids' => ''
            ],
            [
                'name' => $this->types[$type]['caption'] . ' necesare ale băncii <b>'.$banca->nume.'</b>',
                'url'  => "documente_necesare_index",
                'ids' => ['id' => 'documente_necesare', 'id_filter'=>$id_filter]
            ]
        ];
        $config['right_menu'] = [ ['caption' => 'Adaugă document', 'class' => 'action-insert-record']];
        $config['row-source'] .= '/' . $id_filter . '/' . $type;
        $config['caption']  =   $this->types[$type]['caption'];
        $this->show( $config + ['other-info' => ['filter' => $banca, 'type' => $type, 'current_org' => $this->current_org]]);
    }

    public function rows($id,$id_filter, $type){
        $config = \Credite\Grids::make($id)->toRowDatasetConfig($id);
        $filters = $config['source']->custom_filters();
        $config['source']->custom_filters( $filters + [ 'banca' => 'uploaded_docs.'. $this->types[$type]['column'] .' = '.$id_filter ]);
        return $this->dataset( $config );
    }

    public function loadForm($id)
    {
        return $this->get_dtform_properties( \Input::all() );
    }

    public function doAction()
    {
        return $this->do_action( \Input::all() );
    }

    public function upload($id_filter, $type)
    {

        $input = \Input::all();
        $rez =
            \Database\Actions::make()
                ->model('\Credite\Banci\DocumenteNecesare')
                ->data(['id_filter' => $id_filter, 'id_user' => $this->current_user->id, 'type' => $this->types[$type]['column']])
                ->upload($input['file_data'], \Config::get('uploads.'.$this->types[$type]['column']) );
        return $rez;
    }

    public function delete()
    {
        return \Credite\Banci\DocumenteNecesare::deleteFile(\Input::get('id'), $this->current_user->id);
    }

    public function download( $document_id )
    {
        return \Credite\Banci\DocumenteNecesare::downloadFile($document_id);
    }

}