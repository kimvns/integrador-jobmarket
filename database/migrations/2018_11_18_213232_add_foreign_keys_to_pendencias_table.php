<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPendenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pendencias', function(Blueprint $table)
		{
			$table->foreign('solicitacoes_idsol', 'fk_pendencias_solicitacoes1')->references('idsol')->on('solicitacoes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pendencias', function(Blueprint $table)
		{
			$table->dropForeign('fk_pendencias_solicitacoes1');
		});
	}

}
