<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFinanceiroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('financeiro', function(Blueprint $table)
		{
			$table->foreign('concluidos_idconc', 'fk_financeiro_concluidos1')->references('idconc')->on('concluidos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('financeiro', function(Blueprint $table)
		{
			$table->dropForeign('fk_financeiro_concluidos1');
		});
	}

}
