<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDobanziComisioneAddColsXcel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*dobanda fixa standard lei
dobanda fixa standard euro
dobanda fixa preferentiala lei
dobanda fixa preferentiala euro
marja fixa standard lei
marja fixa standard euro
marja fixa preferentiala lei
marja fixa preferentiala euro
indice de referinta Robor calculat la 3 luni
indice de referinta Robor calculat la 6 luni
indice de referinta Euribor calculat la 3 luni
indice de referinta Euribor calculat la 6 luni
Procent avans minim solicitat (%)
"Comisionul de administrare platibil
catre Fondul Nataional de Garantare a Creditelor
(credit Prima Casa) - taxa anuala %"
alte  comisioane ale bancii- sa se poata completa text
precizari suplimentare-sa se poata completa

		*/
		Schema::table('dobanzi_comisioane', function(Blueprint $t){
			$t->float('dobanda_fixa_std');
			$t->tinyInteger('dobanda_fixa_std_switch');
			$t->float('dobanda_fixa_preferentiala');
			$t->tinyInteger('dobanda_fixa_preferentiala_switch');
			$t->float('marja_fixa_std');
			$t->tinyInteger('marja_fixa_std_switch');
			$t->float('marja_fixa_preferentiala');
			$t->tinyInteger('marja_fixa_preferentiala_switch');
			$t->float('indice_referinta_robor');
			$t->tinyInteger('indice_referinta_robor_months');
			$t->float('indice_referinta_robor_euribor');
			$t->tinyInteger('indice_referinta_robor_euribor_months');
			$t->float('procent_avans_minim_solicitat');
			$t->float('comision_administrare_platibil');
			$t->text('alte_comisione_banca');
			$t->text('precizari_suplimentare');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dobanzi_comisioane', function(Blueprint $t){
			$t->dropColumn(
				[
					'dobanda_fixa_std',
					'dobanda_fixa_std_switch',
					'dobanda_fixa_preferentiala',
					'dobanda_fixa_preferentiala_switch',
					'marja_fixa_std',
					'marja_fixa_std_switch',
					'marja_fixa_preferentiala',
					'marja_fixa_preferentiala_switch',
					'indice_referinta_robor',
					'indice_referinta_robor_months',
					'indice_referinta_robor_euribor',
					'indice_referinta_robor_euribor_months',
					'procent_avans_minim_solicitat',
					'comision_administrare_platibil',
					'alte_comisione_banca',
					'precizari_suplimentare',
				]);
		});
	}

}
