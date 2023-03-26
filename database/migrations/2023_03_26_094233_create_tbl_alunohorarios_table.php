<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAlunohorariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_alunohorarios', function(Blueprint $table)
		{
			$table->integer('ahor_id', true);
			$table->integer('alu_id')->index('fk_tbl_alunohorarios_tbl_aluno1');
			$table->integer('ahor_diasemana');
			$table->time('ahor_horario');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_alunohorarios');
	}

}
