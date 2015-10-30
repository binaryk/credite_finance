<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendInvitationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sends_invitation', function(Blueprint $t){
			$t->increments('id');
			$t->text('code');
			$t->integer('send_by');
			$t->tinyinteger('confirmed');
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
		Schema::drop('sends_invitation');
	}

}
