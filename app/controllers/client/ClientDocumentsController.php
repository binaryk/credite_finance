<?php

namespace Credite\Datatable;

use Credite\PersoaneFizice;

class ClientDocumentsController extends \Datatable\DatatableController
{
	protected $layout = 'template.layout';

    public function index($id, $id_client){ 
    	if( ! ($client = \Credite\PersoaneFizice::getRecord( (int) $id_client)) )
		{
			return \Redirect::route('clienti-index');
		}
		
        $config = \Credite\Grids::make('client-documents')->toIndexConfig('client-documents');
        $config['breadcrumbs'] = [
            [
            'name' => 'Clienti',
            'url'  => "clienti-index",
            'ids' => ''
            ],  
            [
            'name' => 'Documente',
            'url'  => "client-documents",
            'ids' => ['id' => 'client-docs', 'id_client'=>$id_client]
            ] 
        ];
        $config['right_menu'] = [ ['caption' => 'Adaugă document', 'class' => 'action-insert-record']];
        $this->show( $config + ['other-info' => ['current_org' => $this->current_org]] );
		$config['row-source'] .= '/' . $id_client;
		$this->show( $config + ['other-info' => ['client' => $client]]);
    }

    public function rows($id,$id_client){ 
        $config = \Credite\Grids::make('client-documents')->toRowDatasetConfig('client-documents');
        $filters = $config['source']->custom_filters(); 
        $config['source']->custom_filters( $filters + [ 'persoana_fizica' => 'uploaded_docs.id_client = '.$id_client ]);
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

	public function upload($id_client)
	{
		
		$input = \Input::all();
		$rez =	
		\Database\Actions::make()
			->model('\Credite\Nomenclatoare\ClientDocuments')
			->data(['id_client' => $id_client,'nume_client' => @PersoaneFizice::find($id_client)->nume . @PersoaneFizice::find($id_client)->prenume, 'id_user' => @$this->current_user->id ])
			->upload($input['file_data'], \Config::get('uploads.client-documents') );
		return $rez;// \Response::json(['message' => "uraa"]);
	}

	public function delete()
	{
		return \Credite\Nomenclatoare\ClientDocuments::deleteFile(\Input::get('id'), $this->current_user->id);
	}

	public function download( $document_id )
	{
		return \Credite\Nomenclatoare\ClientDocuments::downloadFile($document_id);
	}

}