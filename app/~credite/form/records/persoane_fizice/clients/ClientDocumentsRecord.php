<?php

namespace Credite\PersoaneFizice\Form;

class ClientDocumentsRecord extends \Credite\FormsRecord
{

	public function __construct($id)
	{
		parent::__construct($id);
		$this
		->setCaption('insert', 'Adăugare documente')
		->setCaption('update', 'Modificare documente persoană fizice (#:id:)')
		->setCaption('delete', 'Ştergere documente persoană fizice (#:id:)')

		->setFeedback('insert', 'success', 'Adăugarea documentelor persoanei fizice a fost realizată cu succes.')
		->setFeedback('insert', 'error', 'Adaugarea documentelor persoanei fizice <span class="badge">nu</span> a fost realizată.')
		->setFeedback('update', 'success', 'Modificarea documentelor persoanei fizice a fost realizată cu succes.')
		->setFeedback('update', 'error', 'Modificarea documentelor persoanei fizice <span class="badge">nu</span> a fost realizată.')
		->setFeedback('delete', 'success', 'Ştergerea documentelor persoanei fizice a fost realizată cu succes.')
		->setFeedback('delete', 'error', 'Ştergerea documentelor persoanei fizice <span class="badge">nu</span> a fost realizată.')


		// campuri si reguli atasate
		//->addRule('insert', 'nume', 'required') 
		// mesaj pe fiecare regula
		//->addMessage('insert', 'nume.required', 'Numele persoanei fizice trebuie completat.') 
  
		;
	}

    public static function create()
	{
		return self::$instance = new ClientDocumentsRecord('client-documents');
	}
	
}