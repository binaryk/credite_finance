<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConditiiEligibilitate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conditii_eligibilitate', function(Blueprint $t){
			$t->increments('id');
			/*1. Vechime la locul de munca actual( luni)
2. Vechime totala in munca (luni)
3. Venit net minim(lei)
4. Perioada contractului de munca (determinata/nedeterminata)
5. Varsta minima (18 ani)
6. Varsta maxima (70 ani)
7. Venituri obtinute din (lista checkbox din fisa client)
8. Co-platitori acceptati (lista checkbox din fisa client)*/
			$t->integer('id_produs');
			$t->integer('vechime_munca_actual');
			$t->integer('vechime_munca_total');
			$t->float('venit_minim');
			$t->text('perioada_contractului_munca');
			$t->integer('varsta_minima');
			$t->integer('varsta_maxima');
			/*venituri*/
			$t->tinyinteger('salariu');
			$t->tinyinteger('diurne');
			$t->tinyinteger('pensie');
			$t->tinyinteger('dividende');
			$t->tinyinteger('indemniz_copil');
			$t->tinyinteger('activitati_indep');
			$t->tinyinteger('profesii_liberale');
			$t->tinyinteger('drepturi_de_autor');
			$t->tinyinteger('chirii');
			$t->tinyinteger('rente_viagere');
			$t->tinyinteger('comisioane');
			$t->tinyinteger('ore_suplimentare');
			$t->tinyinteger('contracte_de_management');
			$t->tinyinteger('contracte_de_mandat');
			$t->tinyinteger('norma_de_hrana');
			$t->tinyInteger('co_platitor');
			/*/venituri*/
			$t->softDeletes();
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conditii_eligibilitate');
	}

}
