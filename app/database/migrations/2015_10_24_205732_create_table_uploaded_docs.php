<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUploadedDocs extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uploaded_docs', function(Blueprint $t) {
			$t->increments('id');
			$t->integer('id_client')->unsigned();
			$t->text('file_name');
			$t->text('file_url')->nullable();
			$t->string('file_extension', 8);
			$t->integer('file_size');  
			$t->timestamps();
			$t->softDeletes();
		});
	}

	public function down()
	{
		Schema::dropIfExists('uploaded_docs');
	}




}
