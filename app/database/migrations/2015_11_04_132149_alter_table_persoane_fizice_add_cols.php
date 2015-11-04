<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablePersoaneFiziceAddCols extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('persoane_fizice', function(Blueprint $t){
			$t->integer('istoric_tip_credit');
			$t->integer('istoric_tip_codebitor');
			$t->integer('istoric_descoperit_de_cont');
			$t->integer('istoric_card_credit');
			$t->integer('istoric_tip_credit_insitutie');
			$t->integer('istoric_tip_codebitor_insitutie');
			$t->integer('istoric_descoperit_de_cont_insitutie');
			$t->integer('istoric_card_credit_insitutie');
			$t->date('istoric_tip_credit_data_acordarii');
			$t->date('istoric_tip_codebitor_data_acordarii');
			$t->date('istoric_descoperit_de_cont_data_acordarii');
			$t->date('istoric_card_credit_data_acordarii');
			$t->float('istoric_tip_credit_rata_lunara');
			$t->float('istoric_tip_codebitor_rata_lunara');
			$t->float('istoric_descoperit_de_cont_rata_lunara');
			$t->float('istoric_card_credit_rata_lunara');
			$t->float('istoric_tip_credit_sold');
			$t->float('istoric_tip_codebitor_sold');
			$t->float('istoric_descoperit_de_cont_sold');
			$t->float('istoric_card_credit_sold');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('persoane_fizice', function(Blueprint $t){
			$t->dropColumn([
				'istoric_tip_credit',
				'istoric_tip_codebitor',
				'istoric_descoperit_de_cont',
				'istoric_card_credit',
				'istoric_tip_credit_insitutie',
				'istoric_tip_codebitor_insitutie',
				'istoric_descoperit_de_cont_insitutie',
				'istoric_card_credit_insitutie',
				'istoric_tip_credit_data_acordarii',
				'istoric_tip_codebitor_data_acordarii',
				'istoric_descoperit_de_cont_data_acordarii',
				'istoric_card_credit_data_acordarii',
				'istoric_tip_credit_rata_lunara',
				'istoric_tip_codebitor_rata_lunara',
				'istoric_descoperit_de_cont_rata_lunara',
				'istoric_card_credit_rata_lunara',
				'istoric_tip_credit_sold',
				'istoric_tip_codebitor_sold',
				'istoric_descoperit_de_cont_sold',
				'istoric_card_credit_sold',
			]);
		});
	}

}
