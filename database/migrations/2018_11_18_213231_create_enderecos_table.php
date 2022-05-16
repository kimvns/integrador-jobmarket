<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enderecos', function(Blueprint $table)
		{
			$table->integer('idend', true);
			$table->string('logend')->nullable();
			$table->string('baiend')->nullable();
			$table->string('numend', 15)->nullable();
			$table->string('compend', 50)->nullable();
			$table->string('cepend', 15)->nullable();
			$table->timestamps();
			$table->integer('clientes_idcli')->index('fk_enderecos_clientes1');
			$table->integer('fornecedores_idfor')->index('fk_enderecos_fornecedores1');
			$table->integer('cidades_idcid')->index('fk_enderecos_cidades1');
			$table->primary(['idend','clientes_idcli','fornecedores_idfor','cidades_idcid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enderecos');
	}

}
