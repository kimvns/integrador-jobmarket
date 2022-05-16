<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicos', function(Blueprint $table)
		{
			$table->integer('idserv', true);
			$table->string('nomeserv');
			$table->string('descserv')->nullable();
			$table->timestamps();
			$table->integer('subcategorias_idsubc');
			$table->integer('subcategorias_categorias_idcat');
			$table->integer('subcategorias_categorias_clientes_idcli');
			$table->integer('fornecedores_idfor')->index('fk_servicos_fornecedores1');
			$table->primary(['idserv','subcategorias_idsubc','subcategorias_categorias_idcat','subcategorias_categorias_clientes_idcli','fornecedores_idfor']);
			$table->index(['subcategorias_idsubc','subcategorias_categorias_idcat','subcategorias_categorias_clientes_idcli'], 'fk_servicos_subcategorias1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicos');
	}

}
