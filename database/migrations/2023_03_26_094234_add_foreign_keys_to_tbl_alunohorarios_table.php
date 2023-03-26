<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTblAlunohorariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tbl_alunohorarios', function(Blueprint $table)
		{
			$table->foreign('alu_id', 'fk_tbl_alunohorarios_tbl_aluno1')->references('alu_id')->on('tbl_aluno')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tbl_alunohorarios', function(Blueprint $table)
		{
			$table->dropForeign('fk_tbl_alunohorarios_tbl_aluno1');
		});
	}

}
