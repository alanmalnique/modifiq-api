<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAulaprofessorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_aulaprofessor', function(Blueprint $table)
		{
			$table->integer('aprof_id', true);
			$table->integer('aula_id')->index('fk_tbl_aulaprofessor_tbl_aula1');
			$table->integer('prof_id')->index('fk_tbl_aulaprofessor_tbl_professor1');
			$table->dateTime('aprof_dthrinicio');
			$table->dateTime('aprof_dthrtermino')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_aulaprofessor');
	}

}
