<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSolicitacoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('solicitacoes', function(Blueprint $table)
		{
			$table->integer('idsol', true);
			$table->string('descsol', 400)->nullable();
			$table->timestamps();
			$table->integer('status_idstatus')->index('fk_solicitacoes_status1');
			$table->integer('servicos_idserv');
			$table->integer('servicos_subcategorias_idsubc');
			$table->integer('servicos_subcategorias_categorias_idcat');
			$table->integer('servicos_subcategorias_categorias_clientes_idcli');
			$table->integer('servicos_fornecedores_idfor');
			$table->primary(['idsol','status_idstatus','servicos_idserv','servicos_subcategorias_idsubc','servicos_subcategorias_categorias_idcat','servicos_subcategorias_categorias_clientes_idcli','servicos_fornecedores_idfor']);
			$table->index(['servicos_idserv','servicos_subcategorias_idsubc','servicos_subcategorias_categorias_idcat','servicos_subcategorias_categorias_clientes_idcli','servicos_fornecedores_idfor'], 'fk_solicitacoes_servicos1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('solicitacoes');
	}

}
