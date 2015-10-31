<?php

namespace Imobile;

class Route {

	protected static $instance = NULL;
	protected $routes = [];

	public function __construct() {
		$this
		/* Database general operations */
			->add('get', 'home', '/', 'HomeController@showWelcome', '')
			->add('get', 'lock', 'loock', 'HomeController@lockScreen', '')

			/**
		IMOBILE
		 **/

			->add('get', 'datatable-index', 'nomenclatoare/{id}', 'DatatableController@index', 'Imobiliare\Datatable')
			->add('get', 'datatable-row-source', 'nomenclatoare/row-source/{id}', 'DatatableController@rows', 'Imobiliare\Datatable')
			->add('post', 'datatable-load-form', 'nomenclatoare/load-dt-form/{id}', 'DatatableController@loadForm', 'Imobiliare\Datatable')
			->add('post', 'datatable-do-action', 'nomenclatoare/dt-do-action/{id}', 'DatatableController@doAction', 'Imobiliare\Datatable')

/**
Date de baza
 **/
			->add('get', 'judet_localitate_index', 'nomenclatoare/{id}/{judet_id}', 'JudetController@index', 'Imobiliare\Datatable')
			->add('get', 'judet-localitate-row-source', 'nomenclatoare/row-source/{id}/{judet_id}', 'JudetController@rows', 'Imobiliare\Datatable')

			/**
		Persoane fizice
		 */

			->add('get', 'clienti-index', 'clienti/{type?}/{edit?}', 'PrimaCasaController@index', 'Credite\Datatable')
			->add('get', 'persoane-fizice-row-source', 'persoane-fizice/{id}/{type?}', 'PrimaCasaController@rows', 'Credite\Datatable')
			
			->add('get', 'client-documents', 'client-document/{id}/{id_client}', 'ClientDocumentsController@index', 'Credite\Datatable')
			->add('get', 'client-documents-row-source', 'client_document/row-source/{id}/{id_client}', 'ClientDocumentsController@rows', 'Credite\Datatable')
			->add('post', 'upload-client-documents', 'upload-client-document/{id_client}', 'ClientDocumentsController@upload', 'Credite\Datatable')
			->add('post', 'delete-client-documents', 'delete-client-document', 'ClientDocumentsController@delete', 'Credite\Datatable')
			->add('get', 'download-client-documents', 'download-client-documents/{document_id}', 'ClientDocumentsController@download', 'Credite\Datatable')

			/*Genereaza link clienti*/
			->add('get', 'generate-link', 'generate-link', 'ExternClientController@link_generate', 'Credite\Clienti')
			->add('get', 'confirm_link', 'confirm-link/{code?}', 'ExternClientController@confirm', 'Credite\Clienti')
			->add('post', 'post_generate_link', 'post_generate_link', 'ExternClientController@link_generate_post', 'Credite\Clienti')



		;
	}

	protected function add($method, $name, $uri, $action, $namespace) {
		$record = new \StdClass();
		$record->method = $method;
		$record->name = $name;
		$record->uri = $uri;
		$record->action = $action;
		$record->namespace = $namespace;
		$this->routes[] = $record;
		return $this;
	}

	public static function make() {
		return self::$instance = new Route();
	}

	public function define() {
		foreach ($this->routes as $i => $record) {
			\Route::{ $record->method}(
				$record->uri,
				[
					'as' => $record->name,
					'uses' => ($record->namespace ? $record->namespace . '\\' : '') . $record->action,
				]
			);
		}
	}

}