<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTelefonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('telefones', function(Blueprint $table)
		{
			$table->foreign('clientes_idcli', 'fk_telefones_clientes')->references('idcli')->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fornecedores_idfor', 'fk_telefones_fornecedores1')->references('idfor')->on('fornecedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('telefones', function(Blueprint $table)
		{
			$table->dropForeign('fk_telefones_clientes');
			$table->dropForeign('fk_telefones_fornecedores1');
		});
	}

}
