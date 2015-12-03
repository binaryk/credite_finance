<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUploadDocsAddColsBanciDoc extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('uploaded_docs', function(Blueprint $t){
			$t->integer('id_document_necesar');
			$t->integer('id_manual');
			$t->integer('id_instructiuni');
			$t->integer('id_acte_produse');
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
			$t->dropColumn([
			'id_document_necesar',
			'id_manual',
			'id_instructiuni'
			]);
		});
	}

}
