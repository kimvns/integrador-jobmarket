<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnderecosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('enderecos', function(Blueprint $table)
		{
			$table->foreign('cidades_idcid', 'fk_enderecos_cidades1')->references('idcid')->on('cidades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('clientes_idcli', 'fk_enderecos_clientes1')->references('idcli')->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('fornecedores_idfor', 'fk_enderecos_fornecedores1')->references('idfor')->on('fornecedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('enderecos', function(Blueprint $table)
		{
			$table->dropForeign('fk_enderecos_cidades1');
			$table->dropForeign('fk_enderecos_clientes1');
			$table->dropForeign('fk_enderecos_fornecedores1');
		});
	}

}
