<?php
namespace Credite\Datatable;

class ProduseController extends \Datatable\DatatableController
{

    protected $layout = 'template.layout';

    public function index($id, $id_filter){
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
                'name' => 'Produsele băncii <b>'.$banca->nume.'</b>',
                'url'  => "banca_produse",
                'ids' => ['id' => 'banca_produse', 'id_filter'=>$id_filter]
            ]
        ];
        $config['right_menu'] = [ ['caption' => 'Adaugă produs', 'class' => 'action-insert-record']];
        $config['row-source'] .=  '/' . $id_filter;
        $this->show( $config + ['other-info' => ['filter' => $banca, 'current_org' => $this->current_org]]);
    }

    public function rows($id, $id_filter){
        $config = \Credite\Grids::make($id)->toRowDatasetConfig($id);
        $filters = $config['source']->custom_filters();
        $config['source']->custom_filters( $filters + [ 'banca' => 'banca_produs.id_banca = '.$id_filter]);
        return $this->dataset( $config );
    }

}
