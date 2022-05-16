<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTelefonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('telefones', function(Blueprint $table)
		{
			$table->integer('idtel', true);
			$table->string('telefone', 45)->nullable();
			$table->timestamps();
			$table->integer('clientes_idcli')->index('fk_telefones_clientes');
			$table->integer('fornecedores_idfor')->index('fk_telefones_fornecedores1');
			$table->primary(['idtel','clientes_idcli','fornecedores_idfor']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('telefones');
	}

}
