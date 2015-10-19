<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersoaneFiziceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persoane_fizice', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_organizatie');

			//Sectiunea 1: Date de identificare
			$table->text('nume',50);
			$table->text('prenume',50);
			$table->text('cnp',50);
			$table->text('e-mail',50);
			$table->text('telefon',50);
			$table->text('nume_mama',50);

			//Sectiunea 2: Venituri
			$table->double('salariu_net');
			$table->tinyinteger('salariu');
			$table->tinyinteger('diurne');
			$table->tinyinteger('pensie');
			$table->tinyinteger('dividende');
			$table->tinyinteger('indemniz_copil');
			$table->tinyinteger('activitati_indep');
			$table->tinyinteger('profesii_liberale');
			$table->tinyinteger('drepturi_de_autor');
			$table->tinyinteger('chirii');
			$table->tinyinteger('rente_viagere');
			$table->tinyinteger('comisioane');
			$table->tinyinteger('ore_suplimentare');
			$table->tinyinteger('contracte_de_management');
			$table->tinyinteger('contracte_de_mandat');
			$table->tinyinteger('norma_de_hrana');
			$table->text('bonuri_de_masa',50);
			$table->tinyinteger('no_bonuri_de_masa');
			$table->text('per_contract', 20); 
			$table->double('alte_venituri',50);
			$table->text('per_alte_ven', 20);
			$table->tinyinteger('alt_ven_salar');
			$table->tinyinteger('alt_ven_diurne');
			$table->tinyinteger('alt_ven_pensie');
			$table->tinyinteger('alt_ven_divid');
			$table->tinyinteger('alt_ven_indemn_copil');
			$table->tinyinteger('alt_ven_activ_indep');
			$table->tinyinteger('alt_ven_prfs_lbrl');
			$table->tinyinteger('alt_ven_drept_de_autor');
			$table->tinyinteger('alt_ven_chirii');
			$table->tinyinteger('alt_ven_rente_viagere');
			$table->tinyinteger('alt_ven_cmsne');
			$table->tinyinteger('alt_ven_ore_suplim');
			$table->tinyinteger('alt_ven_cntrct_de_mngmnt');
			$table->tinyinteger('alt_ven_cntrct_de_mandat');
			$table->tinyinteger('alt_ven_nrm_de_hrana');
			$table->double('tot_ven_net',50);

			//Sectiune 3: Date angajator
			$table->text('denum_angajator',50);
			$table->text('tip_angajator',50);
			$table->text('cui',50);
			$table->text('nr_angajati',20);
			$table->text('dom_de_actvte',50);

			//Sectiunea 4: Chestionar
			$table->text('ultim_stud_abs',20);
			$table->text('st_civila',20);
			$table->text('functie',50);
			$table->text('profesie',50);
			$table->text('nr_membri_fam',50);
			$table->text('pers_intrtnr',50);
			$table->tinyinteger('propr_auto');
			$table->text('sit_locativa',50);
			$table->text('vec_adr_curenta',50);
			$table->text('vec_loc_munca',50);
			$table->text('vec_tot_munca',50);
			$table->text('bnc_virare_salar',50);
			$table->tinyinteger('istoric_credit');

			$table->timestamps();
			$table->softDeletes();

		});  
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('persoane_fizice');
	}

}
