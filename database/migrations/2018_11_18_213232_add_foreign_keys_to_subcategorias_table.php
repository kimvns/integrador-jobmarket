<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSubcategoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('subcategorias', function(Blueprint $table)
		{
			$table->foreign('categorias_idcat', 'fk_subcategorias_categorias1')->references('idcat')->on('categorias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('subcategorias', function(Blueprint $table)
		{
			$table->dropForeign('fk_subcategorias_categorias1');
		});
	}

}
