<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConcluidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('concluidos', function(Blueprint $table)
		{
			$table->integer('idconc', true);
			$table->string('descconc', 400)->nullable();
			$table->timestamps();
			$table->integer('solicitacoes_idsol');
			$table->integer('solicitacoes_status_idstatus');
			$table->integer('solicitacoes_servicos_idserv');
			$table->integer('solicitacoes_servicos_subcategorias_idsubc');
			$table->integer('solicitacoes_servicos_subcategorias_categorias_idcat');
			$table->integer('solicitacoes_servicos_subcategorias_categorias_clientes_idcli');
			$table->integer('solicitacoes_servicos_fornecedores_idfor');
			$table->primary(['idconc','solicitacoes_idsol','solicitacoes_status_idstatus','solicitacoes_servicos_idserv','solicitacoes_servicos_subcategorias_idsubc','solicitacoes_servicos_subcategorias_categorias_idcat','solicitacoes_servicos_subcategorias_categorias_clientes_idcli','solicitacoes_servicos_fornecedores_idfor']);
			$table->index(['solicitacoes_idsol','solicitacoes_status_idstatus','solicitacoes_servicos_idserv','solicitacoes_servicos_subcategorias_idsubc','solicitacoes_servicos_subcategorias_categorias_idcat','solicitacoes_servicos_subcategorias_categorias_clientes_idcli','solicitacoes_servicos_fornecedores_idfor'], 'fk_concluidos_solicitacoes1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('concluidos');
	}

}
