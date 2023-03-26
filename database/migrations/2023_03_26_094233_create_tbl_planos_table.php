<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPlanosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_planos', function(Blueprint $table)
		{
			$table->integer('plan_id', true);
			$table->integer('arq_id')->index('fk_tbl_planos_tbl_arquivo');
			$table->string('plan_titulo', 80);
			$table->text('plan_resumo');
			$table->text('plan_descricao');
			$table->float('plan_valor', 4);
			$table->smallInteger('plan_ativo')->default(1)->comment('0-N, 1-S');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_planos');
	}

}
