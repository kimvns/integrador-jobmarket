<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSolicitacoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('solicitacoes', function(Blueprint $table)
		{
			$table->foreign('servicos_idserv', 'fk_solicitacoes_servicos1')->references('idserv')->on('servicos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('status_idstatus', 'fk_solicitacoes_status1')->references('idstatus')->on('status')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('solicitacoes', function(Blueprint $table)
		{
			$table->dropForeign('fk_solicitacoes_servicos1');
			$table->dropForeign('fk_solicitacoes_status1');
		});
	}

}
