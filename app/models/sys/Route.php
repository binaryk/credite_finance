<?php

namespace Sys;

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

/**
Date de baza
 **/
			->add('get', 'judet_localitate_index', 'nomenclatoare/{id}/{judet_id}', 'JudetController@index', 'Imobiliare\Datatable')
			->add('get', 'judet-localitate-row-source', 'nomenclatoare/row-source/{id}/{judet_id}', 'JudetController@rows', 'Imobiliare\Datatable')

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