<?php
namespace Credite\Datatable;

use Credite\PersoaneFizice;
use Credite\UploadedDoc;

class OferteGenerateController extends \Datatable\DatatableController
{
    protected $layout = 'template.layout';

    public function __construct()
    {

    }

    public function index($id, $client_id = null){
        $config = \Credite\Grids::make($id)->toIndexConfig($id);
        $config['breadcrumbs'] = [];
        if($client_id){
            $config['right_menu'] = [ ['caption' => 'Adaugă ofertă','class' => 'btn', 'action' => \URL::route('ofertare',['client_id' => $client_id])] ];
            
            $config['caption'] .= ' pentru clientul: '.PersoaneFizice::find($client_id)->nume . ' '. PersoaneFizice::find($client_id)->prenume;
            $config['row-source'] .= "/".$client_id;
        }
        $this->show( $config + ['other-info' => ['client_id' => $client_id] ]);
    }

    public function rows($id, $client_id = null){
        $config = \Credite\Grids::make($id)->toRowDatasetConfig($id);
        $filters = $config['source']->custom_filters();
        $client = [];
        if($client_id){
            $client = ['id_client' => 'uploaded_docs.id_client = '.$client_id];
        }
        $config['source']->custom_filters( $filters + [ 'is_oferta' => 'uploaded_docs.oferte_generate = 1'  ] + $client);
        return $this->dataset( $config );
    }

    public function download($id)
    {
        return UploadedDoc::downloadFile($id);
    }

    public function delete()
    {
        return UploadedDoc::deleteFile(\Input::get('id'));
    }



}