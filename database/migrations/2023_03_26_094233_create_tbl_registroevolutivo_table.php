<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRegistroevolutivoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_registroevolutivo', function(Blueprint $table)
		{
			$table->integer('regev_id', true);
			$table->integer('alu_id')->index('fk_tbl_registroevolutivo_tbl_aluno1');
			$table->integer('arq_id')->nullable()->index('fk_tbl_registroevolutivo_tbl_arquivo1');
			$table->text('regev_descricao');
			$table->dateTime('regev_datahora');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_registroevolutivo');
	}

}
