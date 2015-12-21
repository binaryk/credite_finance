<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDobanziComisioane extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dobanzi_comisioane', function(Blueprint $t) {
			$t->increments('id');
			/*"Dobanda fixa (%)
			Dobanda variabila (%)
			Marja (%)
			Indice de referinta (%)
			DAE (%)
			Valoare comision de analiza (lei)
			Comision de acordare  (%)
			Cosmision de acordare (lei)
			Taxa de inscriere in Arhiva Electronica de Garantii Reale Imobiliare (lei)
			Comision de rambursare anticipata( %)
			Comision prestari servicii bancare(%)
			Comision de administrare lunar( % )
			Comision de administrare lunar (lei)
			Comision de administrare anual %
			Comision de administrare anual (lei)
			Asigurare de viata (%)
			Evaluare (lei)
			Prima Asigurare imobil (%)
			Prima de asigurare a imobilului obligatorie (PAD) (Lei)"
			*/
			$t->integer('id_produs');
			$t->float('dobanda_fixa');
			$t->float('dobanda_variabila');
			$t->float('marja');
			$t->float('indice_referinta');
			$t->float('dae');
			$t->float('valoare_comision_analiza');
			$t->float('comision_acordare_procent');
			$t->float('comision_acordare_lei');
			$t->float('taxa_inscriere_arhiva');
			$t->float('comision_rambursare_anticipata');
			$t->float('comision_prestari_servicii_bancare');
			$t->float('comision_administrare_lunar_procent');
			$t->float('comision_administrare_lunar_lei');
			$t->float('comision_administrare_anual_procent');
			$t->float('comision_administrare_anual_lei');
			$t->float('asigurare_viata');
			$t->float('evaluare');
			$t->float('prima_asigurare_imobil');
			$t->float('prima_asigurare_pad');
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
		Schema::drop('dobanzi_comisioane');
	}

}
