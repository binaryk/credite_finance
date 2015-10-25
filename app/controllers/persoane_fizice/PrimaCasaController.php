<?php
namespace Credite\Datatable;

class PrimaCasaController  extends \Datatable\DatatableController{
    protected $layout = 'template.layout';

    public function index(){ 
        $config = \Credite\Grids::make('prima-casa')->toIndexConfig('prima-casa');
        $config['breadcrumbs'] = [
            [
            'name' => 'Clienti',
            'url'  => "clienti-index",
            'ids' => ''
            ]  
        ];
        $config['right_menu'] = [ ['caption' => 'Adaugă persoana', 'class' => 'action-insert-record'],
                                  ['caption' => 'Trimite link', 'class' => 'generate-link'] ];
        $this->show( $config + ['other-info' => [ 'current_org' => $this->current_org]] );
    }

    public function rows($id){
        $config = \Credite\Grids::make($id)->toRowDatasetConfig($id);
        $filters = $config['source']->custom_filters(); 
        $config['source']->custom_filters( $filters + [ 'persoana_fizica' => 'persoane_fizice.id_organizatie = '.$this->current_org->id ]);
        return $this->dataset( $config );
    }
}