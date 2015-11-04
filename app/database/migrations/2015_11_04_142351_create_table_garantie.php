<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGarantie extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imobile_garantie', function(Blueprint $t){
			$t->increments('id');
			$t->text('tip', 20);
			$t->text('an_constructie', 20);
			$t->text('localizare', 20);
			$t->text('marime', 20);
			$t->text('regim_juridic', 20);
			$t->float('valoare_estimata');
			$t->timestamps();
			$t->softdeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('imobile_garantie');
	}

}
