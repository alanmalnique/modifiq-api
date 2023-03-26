<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProfessorhorariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_professorhorarios', function(Blueprint $table)
		{
			$table->integer('phor_id', true);
			$table->integer('prof_id')->index('fk_tbl_professorhorarios_tbl_professor1');
			$table->integer('phor_diasemana');
			$table->time('phor_horario');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_professorhorarios');
	}

}
