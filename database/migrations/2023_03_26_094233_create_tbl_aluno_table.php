<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAlunoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_aluno', function(Blueprint $table)
		{
			$table->integer('alu_id', true);
			$table->integer('arq_id')->index('fk_tbl_aluno_tbl_arquivo1');
			$table->integer('plan_id')->index('fk_tbl_aluno_tbl_planos1');
			$table->integer('prof_id')->index('fk_tbl_aluno_tbl_professor1');
			$table->string('alu_nome', 80);
			$table->string('alu_cpf', 14);
			$table->string('alu_senha');
			$table->string('alu_whatsapp', 15);
			$table->string('alu_endlogradouro', 80);
			$table->string('alu_endnumero', 30);
			$table->string('alu_endcomplemento', 30)->nullable();
			$table->string('alu_endbairro', 50);
			$table->string('alu_endcidade', 80);
			$table->string('alu_enduf', 2);
			$table->string('alu_endcep', 10);
			$table->string('alu_endpais', 50);
			$table->string('alu_profissao', 50);
			$table->string('alu_comoconheceu', 45)->nullable();
			$table->string('alu_quemindicou', 45)->nullable();
			$table->date('alu_dtvencimento');
			$table->dateTime('alu_dthraulaexperimental');
			$table->smallInteger('alu_ativo')->default(1)->comment('0-N, 1-S');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_aluno');
	}

}
