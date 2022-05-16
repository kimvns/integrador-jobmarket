<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('servicos', function(Blueprint $table)
		{
			$table->foreign('fornecedores_idfor', 'fk_servicos_fornecedores1')->references('idfor')->on('fornecedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('subcategorias_idsubc', 'fk_servicos_subcategorias1')->references('idsubc')->on('subcategorias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('servicos', function(Blueprint $table)
		{
			$table->dropForeign('fk_servicos_fornecedores1');
			$table->dropForeign('fk_servicos_subcategorias1');
		});
	}

}
