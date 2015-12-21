<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableDobanziComisioaneAddDropDowns extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dobanzi_comisioane', function(Blueprint $t){
			$t->float('comision_administrare');
			$t->float('comision_acordare');
			$t->text('comision_administrare_months');
			$t->text('comision_administrare_units');
			$t->text('comision_acordare_units');
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
			$t->dropColumn([
				'comision_administrare',
				'comision_administrare_months',
				'comision_administrare_units',
				'comision_acordare_units',
				'comision_acordare',
			]);
		});
	}

}
