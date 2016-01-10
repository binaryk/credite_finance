<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUploadedDocsAddColForOferte extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('uploaded_docs', function(Blueprint $t){
			$t->tinyInteger('oferte_generate')->default(0)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('uploaded_docs', function(Blueprint $t){
			$t->dropColumn('oferte_generate');
		});
	}

}
