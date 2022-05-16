<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cidades', function(Blueprint $table)
		{
			$table->foreign('estados_idest', 'fk_cidades_estados1')->references('idest')->on('estados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cidades', function(Blueprint $table)
		{
			$table->dropForeign('fk_cidades_estados1');
		});
	}

}
