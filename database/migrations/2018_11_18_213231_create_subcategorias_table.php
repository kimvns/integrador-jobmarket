<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubcategoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subcategorias', function(Blueprint $table)
		{
			$table->integer('idsubc', true);
			$table->string('nomesubc')->nullable();
			$table->timestamps();
			$table->integer('categorias_idcat');
			$table->integer('categorias_clientes_idcli');
			$table->primary(['idsubc','categorias_idcat','categorias_clientes_idcli']);
			$table->index(['categorias_idcat','categorias_clientes_idcli'], 'fk_subcategorias_categorias1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subcategorias');
	}

}
