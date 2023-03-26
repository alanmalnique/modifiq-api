<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTblTransacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tbl_transacao', function(Blueprint $table)
		{
			$table->foreign('alu_id', 'fk_tbl_transacao_tbl_aluno1')->references('alu_id')->on('tbl_aluno')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('plan_id', 'fk_tbl_transacao_tbl_planos1')->references('plan_id')->on('tbl_planos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tbl_transacao', function(Blueprint $table)
		{
			$table->dropForeign('fk_tbl_transacao_tbl_aluno1');
			$table->dropForeign('fk_tbl_transacao_tbl_planos1');
		});
	}

}
