<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTblAlunoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tbl_aluno', function(Blueprint $table)
		{
			$table->foreign('arq_id', 'fk_tbl_aluno_tbl_arquivo1')->references('arq_id')->on('tbl_arquivo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('plan_id', 'fk_tbl_aluno_tbl_planos1')->references('plan_id')->on('tbl_planos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('prof_id', 'fk_tbl_aluno_tbl_professor1')->references('prof_id')->on('tbl_professor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tbl_aluno', function(Blueprint $table)
		{
			$table->dropForeign('fk_tbl_aluno_tbl_arquivo1');
			$table->dropForeign('fk_tbl_aluno_tbl_planos1');
			$table->dropForeign('fk_tbl_aluno_tbl_professor1');
		});
	}

}
