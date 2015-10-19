<?php

namespace Credite\PersoaneFizice\Form;

class PersoaneFiziceRecord extends \Credite\FormsRecord
{

	public function __construct($id)
	{
		parent::__construct($id);
		$this
		->setCaption('insert', 'Adăugare persoane fizice')
		->setCaption('update', 'Modificare persoane fizice (#:id:)')
		->setCaption('delete', 'Ştergere persoane fizice (#:id:)')

		->setFeedback('insert', 'success', 'Adăugarea persoanei fizice a fost realizată cu succes.')
		->setFeedback('insert', 'error', 'Adaugarea persoanei fizice <span class="badge">nu</span> a fost realizată.')
		->setFeedback('update', 'success', 'Modificarea persoanei fizice a fost realizată cu succes.')
		->setFeedback('update', 'error', 'Modificarea persoanei fizice <span class="badge">nu</span> a fost realizată.')
		->setFeedback('delete', 'success', 'Ştergerea persoanei fizice a fost realizată cu succes.')
		->setFeedback('delete', 'error', 'Ştergerea persoanei fizice <span class="badge">nu</span> a fost realizată.')


		// campuri si reguli atasate
		->addRule('insert', 'nume', 'required') 
		// mesaj pe fiecare regula
		->addMessage('insert', 'nume.required', 'Numele persoanei fizice trebuie completat.') 
  
		;
	}

    public static function create()
	{
		return self::$instance = new PersoaneFiziceRecord('prima-casa');
	}
	
}