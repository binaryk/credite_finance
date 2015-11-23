<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablePersoaneFiziceAddCols2 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('persoane_fizice', function(Blueprint $t){
			$t->tinyInteger('co_platitor');
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
			$t->dropColumn('co_platitor');
		});
	}

}
