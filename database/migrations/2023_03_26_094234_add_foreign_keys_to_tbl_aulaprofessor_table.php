<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTblAulaprofessorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tbl_aulaprofessor', function(Blueprint $table)
		{
			$table->foreign('aula_id', 'fk_tbl_aulaprofessor_tbl_aula1')->references('aula_id')->on('tbl_aula')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('prof_id', 'fk_tbl_aulaprofessor_tbl_professor1')->references('prof_id')->on('tbl_professor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tbl_aulaprofessor', function(Blueprint $table)
		{
			$table->dropForeign('fk_tbl_aulaprofessor_tbl_aula1');
			$table->dropForeign('fk_tbl_aulaprofessor_tbl_professor1');
		});
	}

}
