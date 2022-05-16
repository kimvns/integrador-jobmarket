<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePendenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pendencias', function(Blueprint $table)
		{
			$table->integer('idpen', true);
			$table->string('descpen')->nullable();
			$table->timestamps();
			$table->integer('solicitacoes_idsol');
			$table->integer('solicitacoes_status_idstatus');
			$table->integer('solicitacoes_servicos_idserv');
			$table->integer('solicitacoes_servicos_subcategorias_idsubc');
			$table->integer('solicitacoes_servicos_subcategorias_categorias_idcat');
			$table->integer('solicitacoes_servicos_subcategorias_categorias_clientes_idcli');
			$table->integer('solicitacoes_servicos_fornecedores_idfor');
			$table->primary(['idpen','solicitacoes_idsol','solicitacoes_status_idstatus','solicitacoes_servicos_idserv','solicitacoes_servicos_subcategorias_idsubc','solicitacoes_servicos_subcategorias_categorias_idcat','solicitacoes_servicos_subcategorias_categorias_clientes_idcli','solicitacoes_servicos_fornecedores_idfor']);
			$table->index(['solicitacoes_idsol','solicitacoes_status_idstatus','solicitacoes_servicos_idserv','solicitacoes_servicos_subcategorias_idsubc','solicitacoes_servicos_subcategorias_categorias_idcat','solicitacoes_servicos_subcategorias_categorias_clientes_idcli','solicitacoes_servicos_fornecedores_idfor'], 'fk_pendencias_solicitacoes1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pendencias');
	}

}
