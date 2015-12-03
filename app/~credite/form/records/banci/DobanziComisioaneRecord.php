<?php

namespace Credite\Banci\Form;

class DobanziComisioaneRecord extends \Credite\FormsRecord
{

	public function __construct($id)
	{
		parent::__construct($id);
		$this
		->setCaption('insert', 'Adăugare dobânzi și comisioane')
		->setCaption('update', 'Modificare dobânzi și comisioane (#:id:)')
		->setCaption('delete', 'Ştergere dobânzi și comisioane (#:id:)')

		->setFeedback('insert', 'success', 'Adăugarea  fost realizată cu succes.')
		->setFeedback('insert', 'error', 'Adaugarea <span class="badge">nu</span> a fost realizată.')
		->setFeedback('update', 'success', 'Modificarea  fost realizată cu succes.')
		->setFeedback('update', 'error', 'Modificarea <span class="badge">nu</span> a fost realizată.')
		->setFeedback('delete', 'success', 'Ştergerea  fost realizată cu succes.')
		->setFeedback('delete', 'error', 'Ştergerea <span class="badge">nu</span> a fost realizată.')


		;
	}

    public static function create()
	{
		return self::$instance = new DobanziComisioaneRecord('dobanzi_comisioane');
	}
	
}