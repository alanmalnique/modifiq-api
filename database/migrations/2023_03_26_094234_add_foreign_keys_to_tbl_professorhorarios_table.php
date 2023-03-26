<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTblProfessorhorariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tbl_professorhorarios', function(Blueprint $table)
		{
			$table->foreign('prof_id', 'fk_tbl_professorhorarios_tbl_professor1')->references('prof_id')->on('tbl_professor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tbl_professorhorarios', function(Blueprint $table)
		{
			$table->dropForeign('fk_tbl_professorhorarios_tbl_professor1');
		});
	}

}
