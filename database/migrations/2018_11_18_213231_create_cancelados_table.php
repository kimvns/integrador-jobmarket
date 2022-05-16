<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCanceladosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cancelados', function(Blueprint $table)
		{
			$table->integer('idcanc', true);
			$table->string('desccanc', 400)->nullable();
			$table->timestamps();
			$table->integer('solicitacoes_idsol');
			$table->integer('solicitacoes_status_idstatus');
			$table->integer('solicitacoes_servicos_idserv');
			$table->integer('solicitacoes_servicos_subcategorias_idsubc');
			$table->integer('solicitacoes_servicos_subcategorias_categorias_idcat');
			$table->integer('solicitacoes_servicos_subcategorias_categorias_clientes_idcli');
			$table->integer('solicitacoes_servicos_fornecedores_idfor');
			$table->primary(['idcanc','solicitacoes_idsol','solicitacoes_status_idstatus','solicitacoes_servicos_idserv','solicitacoes_servicos_subcategorias_idsubc','solicitacoes_servicos_subcategorias_categorias_idcat','solicitacoes_servicos_subcategorias_categorias_clientes_idcli','solicitacoes_servicos_fornecedores_idfor']);
			$table->index(['solicitacoes_idsol','solicitacoes_status_idstatus','solicitacoes_servicos_idserv','solicitacoes_servicos_subcategorias_idsubc','solicitacoes_servicos_subcategorias_categorias_idcat','solicitacoes_servicos_subcategorias_categorias_clientes_idcli','solicitacoes_servicos_fornecedores_idfor'], 'fk_cancelados_solicitacoes1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cancelados');
	}

}
