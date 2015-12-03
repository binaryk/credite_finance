<?php

namespace Credite\Banci\Form;

class BanciRecord extends \Credite\FormsRecord
{

	public function __construct($id)
	{
		parent::__construct($id);
		$this
		->setCaption('insert', 'Adăugare bănci')
		->setCaption('update', 'Modificare băncă (#:id:)')
		->setCaption('delete', 'Ştergere băncă (#:id:)')

		->setFeedback('insert', 'success', 'Adăugarea băncii  fost realizată cu succes.')
		->setFeedback('insert', 'error', 'Adaugarea băncii <span class="badge">nu</span> a fost realizată.')
		->setFeedback('update', 'success', 'Modificarea băncii  fost realizată cu succes.')
		->setFeedback('update', 'error', 'Modificarea băncii <span class="badge">nu</span> a fost realizată.')
		->setFeedback('delete', 'success', 'Ştergerea băncii  fost realizată cu succes.')
		->setFeedback('delete', 'error', 'Ştergerea băncii <span class="badge">nu</span> a fost realizată.')


		->addRule('insert', 'nume', 'required')
		->addMessage('insert', 'nume.required', 'Denumirea băncii trebuie completată.')

		;
	}

    public static function create()
	{
		return self::$instance = new BanciRecord('grid_banci');
	}
	
}