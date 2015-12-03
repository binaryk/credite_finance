<?php
namespace Banci;

class BanciController extends \Datatable\DatatableController
{

    protected $layout = 'template.layout';

    public function index(){
        $config = \Credite\Grids::make('grid_banci')->toIndexConfig('grid_banci');
        $config['breadcrumbs'] = [
            [
                'name' => 'Bănci',
                'url'  => "grid_banci",
                'ids' => ''
            ]
        ];
        $config['right_menu'] = [ ['caption' => 'Adaug&#259; bancă', 'class' => 'action-insert-record'] ];
        $this->show( $config + ['other-info' => [ 'current_org' => $this->current_org]] );
    }

    public function rows($id){
        $config = \Credite\Grids::make($id)->toRowDatasetConfig($id);
        $filters = $config['source']->custom_filters();
//        $config['source']->custom_filters( $filters + [ 'proprietar_org' => 'proprietari_persoane_fizice.id_organizatie = '.$this->current_org->id ]);
        return $this->dataset( $config );
    }

}
