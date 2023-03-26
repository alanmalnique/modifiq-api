<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAlunoanamneseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_alunoanamnese', function(Blueprint $table)
		{
			$table->integer('anam_id', true);
			$table->integer('alu_id')->index('fk_tbl_alunoanamnese_tbl_aluno1');
			$table->smallInteger('anam_praticaatividade');
			$table->string('anam_qualatividade', 80)->nullable();
			$table->smallInteger('anam_tomamedicamento');
			$table->string('anam_qualmedicamento', 80)->nullable();
			$table->smallInteger('anam_fumante');
			$table->string('anam_fumaquantotempo', 80)->nullable();
			$table->smallInteger('anam_hipertensao');
			$table->smallInteger('anam_doenca');
			$table->string('anam_qualdoenca', 80)->nullable();
			$table->smallInteger('anam_apresentador');
			$table->string('anam_qualdor', 80)->nullable();
			$table->string('anam_qualmovimentosentedor', 80)->nullable();
			$table->smallInteger('anam_fezcirurgia');
			$table->string('anam_cirurgiaonde', 80)->nullable();
			$table->string('anam_tempocirurgia', 80)->nullable();
			$table->text('anam_objetivo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_alunoanamnese');
	}

}
