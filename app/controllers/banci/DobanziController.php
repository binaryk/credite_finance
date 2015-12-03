<?php
namespace Credite\Datatable;

class DobanziController extends \Datatable\DatatableController
{

    protected $layout = 'template.layout';

    public function index($id, $id_filter){

        if( ! ($node = \Credite\Produs::getRecord( (int) $id_filter)) )
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
                'name' => 'Produsele băncii',
                'url'  => "banca_produse",
                'ids' => ['id' => 'banca_produse', 'id_filter'=>$id_filter]
            ],
            [
                'name' => 'Dobânzi și comisioane ale produsului: <b>'.$node->nume.'</b>',
                'url'  => "dobanzi_comisioane",
                'ids' => ['id' => 'dobanzi_comisioane', 'id_filter'=>$id_filter]
            ]
        ];
        $config['right_menu'] = [ ['caption' => 'Adaugă dobânzi', 'class' => 'action-insert-record']];
        $config['row-source'] .=  '/' . $id_filter;
        $this->show( $config + ['other-info' => ['filter' => $node, 'current_org' => $this->current_org]]);
    }

    public function rows($id, $id_filter){
        $config = \Credite\Grids::make($id)->toRowDatasetConfig($id);
        $filters = $config['source']->custom_filters();
        $config['source']->custom_filters( $filters + [ 'produs' => 'dobanzi_comisioane.id_produs = '.$id_filter]);
        return $this->dataset( $config );
    }

}
