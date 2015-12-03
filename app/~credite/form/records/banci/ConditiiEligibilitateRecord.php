<?php

namespace Credite\Banci\Form;

class ConditiiEligibilitateRecord extends \Credite\FormsRecord
{

	public function __construct($id)
	{
		parent::__construct($id);
		$this
		->setCaption('insert', 'Adăugare condiții de eligibilitate')
		->setCaption('update', 'Modificare condiții (#:id:)')
		->setCaption('delete', 'Ştergere condiții (#:id:)')

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
		return self::$instance = new ConditiiEligibilitateRecord('conditii_eligibilitate');
	}
	
}