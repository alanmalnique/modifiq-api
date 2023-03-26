<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblInstitucionalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_institucional', function(Blueprint $table)
		{
			$table->integer('inst_id', true);
			$table->integer('instc_id')->index('fk_tbl_institucional_tbl_institucionalcategoria1');
			$table->string('inst_titulo', 80);
			$table->smallInteger('inst_ativo')->default(1)->comment('0-N, 1-S');
			$table->integer('inst_relevancia')->nullable();
			$table->text('inst_texto')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_institucional');
	}

}
