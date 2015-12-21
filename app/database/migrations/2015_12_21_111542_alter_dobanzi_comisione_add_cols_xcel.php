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
			$t->float('dobanda_fixa_std_lei');
			$t->float('dobanda_fixa_std_eur');
			$t->float('dobanda_fixa_preferentiala_lei');
			$t->float('dobanda_fixa_preferentiala_eur');
			$t->float('marja_fixa_std_lei');
			$t->float('marja_fixa_std_eur');
			$t->float('marja_fixa_preferentiala_lei');
			$t->float('marja_fixa_preferentiala_eur');
			$t->float('indice_referinta_robor_3');
			$t->float('indice_referinta_robor_months_6');
			$t->float('indice_referinta_robor_euribor_3');
			$t->float('indice_referinta_robor_euribor_6');
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
					'dobanda_fixa_std_lei',
					'dobanda_fixa_std_eur',
					'dobanda_fixa_preferentiala_lei',
					'dobanda_fixa_preferentiala_eur',
					'marja_fixa_std_lei',
					'marja_fixa_std_eur',
					'marja_fixa_preferentiala_lei',
					'marja_fixa_preferentiala_eur',
					'indice_referinta_robor_3',
					'indice_referinta_robor_months_6',
					'indice_referinta_robor_euribor_3',
					'indice_referinta_robor_euribor_6',
					'procent_avans_minim_solicitat',
					'comision_administrare_platibil',
					'alte_comisione_banca',
					'precizari_suplimentare',
				]);
		});
	}

}
