<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPersoaneFiziceDataScadentei extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('persoane_fizice', function(Blueprint $t){
			$t->date('data_scadentei');
			$t->float('rata_lunara');
			$t->float('euribor_procent');
			$t->tinyInteger('has_data_scadentei');
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
			$t->dropColumn(['data_scadentei','rata_lunara','euribor_procent','has_data_scadentei']);
		});
	}

}
