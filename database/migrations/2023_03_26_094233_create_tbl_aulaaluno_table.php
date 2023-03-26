<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAulaalunoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_aulaaluno', function(Blueprint $table)
		{
			$table->integer('aalu_id', true);
			$table->integer('aula_id')->index('fk_tbl_aulaaluno_tbl_aula1');
			$table->integer('alu_id')->index('fk_tbl_aulaaluno_tbl_aluno1');
			$table->dateTime('aalu_dthrinicio');
			$table->dateTime('aalu_dthrtermino')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_aulaaluno');
	}

}
