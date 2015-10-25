<?php

namespace Credite\PersoaneFizice\Form;

class ClientDocumentForm extends \Processing\Form\Form
{


	public static function make()
	{
		return self::$instance = new ClientDocumentForm();
	}

	protected function setView()
	{
		$this->view('persoane_fizice.client_document.form');
	}

	protected function setModel()
	{
		$this->model('Credite|Nomenclatoare|ClientDocuments');
	}

	protected function addControls()
	{
	}
	

}