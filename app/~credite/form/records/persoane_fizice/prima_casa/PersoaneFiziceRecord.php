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
		->addMessage('insert', 'nume.required', 'Numele persoanei fizice trebuie completat.') 
		->addRule('insert', 'nume', 'required')
		->addRule('update', 'nume', 'required')
		->addRule('insert', 'prenume', 'required')
		->addRule('update', 'prenume', 'required')
		->addRule('insert', 'cnp', 'required')
		->addRule('update', 'cnp', 'required')
		->addRule('insert', 'email', 'required')
		->addRule('update', 'email', 'required')
		->addRule('insert', 'telefon', 'required')
		->addRule('update', 'telefon', 'required')
		->addRule('insert', 'nume_mama', 'required')
		->addRule('update', 'nume_mama', 'required')
		// ->addRule('insert', 'tot_ven_net', 'required')
		// ->addRule('update', 'tot_ven_net', 'required')
		->addRule('insert', 'denum_angajator', 'required')
		->addRule('update', 'denum_angajator', 'required')
		->addRule('insert', 'tip_angajator', 'required')
		->addRule('update', 'tip_angajator', 'required')
		->addRule('update', 'tip_angajator', 'not_in:0,-1')
		->addRule('insert', 'tip_angajator', 'not_in:0,-1')
		->addRule('insert', 'nr_angajati', 'required')
		->addRule('update', 'nr_angajati', 'required')
		->addRule('insert', 'nr_angajati', 'not_in:0,-1')
		->addRule('update', 'nr_angajati', 'not_in:0,-1')

		->addRule('insert', 'ultim_stud_abs', 'required')
		->addRule('update', 'ultim_stud_abs', 'required')

		->addRule('insert', 'ultim_stud_abs', 'not_in:0,-1')
		->addRule('update', 'ultim_stud_abs', 'not_in:0,-1')
		
		->addRule('insert', 'st_civila', 'required')
		->addRule('update', 'st_civila', 'required')

		->addRule('insert', 'st_civila', 'not_in:0,-1')
		->addRule('update', 'st_civila', 'not_in:0,-1')

		->addRule('insert', 'functie', 'required')
		->addRule('update', 'functie', 'required')

		->addRule('insert', 'profesie', 'required')
		->addRule('update', 'profesie', 'required')

		->addRule('insert', 'nr_membri_fam', 'required')
		->addRule('update', 'nr_membri_fam', 'required')

		->addRule('insert', 'pers_intrtnr', 'required')
		->addRule('update', 'pers_intrtnr', 'required')

		->addRule('insert', 'propr_auto', 'required')
		->addRule('update', 'propr_auto', 'required')

		->addRule('insert', 'vec_loc_munca', 'required')
		->addRule('update', 'vec_loc_munca', 'required')

		->addRule('insert', 'vec_tot_munca', 'required')
		->addRule('update', 'vec_tot_munca', 'required')
		
		->addRule('insert', 'bnc_virare_salar', 'required')
		->addRule('update', 'bnc_virare_salar', 'required')

		->addRule('insert', 'bnc_virare_salar', 'not_in:0,-1')
		->addRule('update', 'bnc_virare_salar', 'not_in:0,-1')

		->addRule('insert', 'istoric_credit', 'required')
		->addRule('update', 'istoric_credit', 'required')


		/*mesaje*/
		->addMessage('insert', 'nume.required', 'Numele clientului este obligtoriu.')
		->addMessage('insert', 'prenume.required', 'Prenume clientului este obligtoriu.')
		->addMessage('insert', 'cnp.required', 'CNP-ul clientului este obligtoriu.')
		->addMessage('insert', 'email.required', 'Emailul clientului este obligtoriu.')
		->addMessage('insert', 'telefon.required', 'Telefonul clientului este obligtoriu.')
		->addMessage('insert', 'nume_mama.required', 'Numele mamei clientului este obligtoriu.')
		->addMessage('update', 'nume.required', 'Numele clientului este obligtoriu.')
		->addMessage('update', 'prenume.required', 'Prenume clientului este obligtoriu.')
		->addMessage('update', 'cnp.required', 'CNP-ul clientului este obligtoriu.')
		->addMessage('update', 'email.required', 'Emailul clientului este obligtoriu.')
		->addMessage('update', 'telefon.required', 'Telefonul clientului este obligtoriu.')
		->addMessage('update', 'nume_mama.required', 'Numele mamei clientului este obligtoriu.')
		
		// ->addMessage('insert', 'tot_ven_net.required', 'Venitul net al clientului este obligtoriu.')
		// ->addMessage('update', 'tot_ven_net.required', 'Venitul net al clientului este obligtoriu.')
		
		->addMessage('insert', 'denum_angajator.required', 'Numele angajatorului este obligtoriu.')
		->addMessage('update', 'denum_angajator.required', 'Numele angajatorului este obligtoriu.')
		
		->addMessage('insert', 'tip_angajator.required', 'Tipul angajatorului este obligtoriu.')
		->addMessage('update', 'tip_angajator.required', 'Tipul angajatorului este obligtoriu.')
		
		->addMessage('insert', 'tip_angajator.not_in', 'Tipul angajatorului este obligtoriu.')
		->addMessage('update', 'tip_angajator.not_in', 'Tipul angajatorului este obligtoriu.')
		
		->addMessage('insert', 'nr_angajati.required', 'Numărul de angajați este obligtoriu.')
		->addMessage('update', 'nr_angajati.required', 'Numărul de angajați este obligtoriu.')
		
		->addMessage('insert', 'nr_angajati.not_in', 'Numărul de angajați este obligtoriu.')
		->addMessage('update', 'nr_angajati.not_in', 'Numărul de angajați este obligtoriu.')



		->addMessage('insert', 'ultim_stud_abs.required', 'Ultimele studii absolvite sunt obligtorii.')
		->addMessage('insert', 'ultim_stud_abs.not_in', 'Ultimele studii absolvite sunt obligtorii.')
		->addMessage('insert', 'st_civila.required', 'Starea civilă este obligtorie.')
		->addMessage('insert', 'st_civila.not_in', 'Starea civilă este obligtorie.')
		->addMessage('insert', 'functie.required', 'Funcția este obligtorie.')
		->addMessage('insert', 'profesie.required', 'Profesia este obligtorie.')
		->addMessage('insert', 'nr_membri_fam.required', 'Numărul de membri este obligtoriu.')
		->addMessage('insert', 'pers_intrtnr.required', 'Persoane în întreținere este obligtoriu.')
		->addMessage('insert', 'propr_auto.required', 'Proprietar auto este obligtoriu.')
		->addMessage('insert', 'vec_loc_munca.required', 'Vechimea în muncă este obligtorie.')
		->addMessage('insert', 'vec_tot_munca.required', 'Vechimea în muncă este obligtorie.')
		->addMessage('insert', 'bnc_virare_salar.required', 'Banca unde se virează salariul este obligtorie.')
		->addMessage('insert', 'bnc_virare_salar.not_in', 'Banca unde se virează salariul este obligtorie.')
		->addMessage('insert', 'istoric_credit.required', 'Istoricul de creditare este obligtoriu.')
  
		;
	}

    public static function create()
	{
		return self::$instance = new PersoaneFiziceRecord('prima-casa');
	}
	
}