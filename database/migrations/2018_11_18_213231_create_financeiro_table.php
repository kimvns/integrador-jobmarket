<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinanceiroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('financeiro', function(Blueprint $table)
		{
			$table->integer('idfin', true);
			$table->dateTime('datafin');
			$table->decimal('valorfin', 7);
			$table->decimal('totalfin', 7);
			$table->timestamps();
			$table->integer('concluidos_idconc');
			$table->integer('concluidos_solicitacoes_idsol');
			$table->integer('concluidos_solicitacoes_status_idstatus');
			$table->integer('concluidos_solicitacoes_servicos_idserv');
			$table->integer('concluidos_solicitacoes_servicos_subcategorias_idsubc');
			$table->integer('concluidos_categorias_idcat');
			$table->integer('concluidos_categorias_clientes_idcli');
			$table->integer('concluidos_solicitacoes_servicos_fornecedores_idfor');
			$table->primary(['idfin','concluidos_idconc','concluidos_solicitacoes_idsol','concluidos_solicitacoes_status_idstatus','concluidos_solicitacoes_servicos_idserv','concluidos_solicitacoes_servicos_subcategorias_idsubc','concluidos_categorias_idcat','concluidos_categorias_clientes_idcli','concluidos_solicitacoes_servicos_fornecedores_idfor']);
			$table->index(['concluidos_idconc','concluidos_solicitacoes_idsol','concluidos_solicitacoes_status_idstatus','concluidos_solicitacoes_servicos_idserv','concluidos_solicitacoes_servicos_subcategorias_idsubc','concluidos_categorias_idcat','concluidos_categorias_clientes_idcli','concluidos_solicitacoes_servicos_fornecedores_idfor'], 'fk_financeiro_concluidos1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('financeiro');
	}

}
