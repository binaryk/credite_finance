<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIstoricCreditare extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('istoric_creditare', function(Blueprint $t){
			$t->increments('id');
            $t->integer('id_client');
			$t->integer('tip')->comment('1-credit, 2->co-debitor, 3->descoperit de cont, 4->Card de credit');
			$t->integer('id_institutie');
			$t->date('data_acordarii');
			$t->float('rata_lunara');
			$t->float('sold');
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
		Schema::drop('istoric_creditare');
	}

}
