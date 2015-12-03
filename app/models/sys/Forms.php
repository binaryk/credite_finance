<?php

namespace Credite;

class Forms
{

	protected static $instance = NULL;
	protected $forms =[];

	protected $maps = [
		'prima-casa'        => '\Credite\PersoaneFizice\Form\PersoaneFiziceRecord', 
		'client-documents'	=> '\Credite\PersoaneFizice\Form\ClientDocumentsRecord',
		'documente_necesare'=> '\Credite\Banci\Form\DocumenteNecesareRecord',
		'grid_banci'		=> '\Credite\Banci\Form\BanciRecord',
		'conditii_eligibilitate' => '\Credite\Banci\Form\ConditiiEligibilitateRecord',
		'dobanzi_comisioane'	 => '\Credite\Banci\Form\DobanziComisioaneRecord',
	];

	public function __construct($id)
	{
		$this->addForm( call_user_func([$this->maps[$id], 'create']));
	}

	protected function addForm( FormsRecord $form)
	{
		$this->forms[$form->id] = $form;
		return $this;
	}

	public static function make($id)
	{
		return self::$instance = new Forms($id);
	}

	public function toFormConfig($id)
	{
		$record = $this->forms[$id];
		$result = new \StdClass();
		$result->captions = $record->captions(); 
		$result->buttons = $record->buttons(); 
		return $result;
	}

	public function toActionConfig($id)
	{
		$record = $this->forms[$id];
		$result = new \StdClass();
		$result->feedback = $record->feedback(); 
		$result->rules    = $record->rules();
		$result->messages = $record->messages();
		return $result;
	}

}