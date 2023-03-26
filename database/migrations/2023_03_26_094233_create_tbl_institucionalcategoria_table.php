<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblInstitucionalcategoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_institucionalcategoria', function(Blueprint $table)
		{
			$table->integer('instc_id', true);
			$table->integer('arq_id')->nullable()->index('fk_tbl_institucionalcategoria_tbl_arquivo1');
			$table->string('instc_titulo', 80);
			$table->smallInteger('instc_ativo')->default(1)->comment('0-N, 1-S');
			$table->integer('instc_relevancia')->nullable();
			$table->text('instc_resumo')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_institucionalcategoria');
	}

}
