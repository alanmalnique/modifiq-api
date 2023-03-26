<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProfessorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_professor', function(Blueprint $table)
		{
			$table->integer('prof_id', true);
			$table->string('prof_nome', 60);
			$table->string('prof_whatsapp', 15);
			$table->string('prof_email', 80);
			$table->string('prof_senha');
			$table->text('prof_descricao');
			$table->smallInteger('prof_ativo')->default(1)->comment('0-N, 1-S');
			$table->date('prof_dtnascimento');
			$table->string('prof_endlogradouro', 80)->nullable();
			$table->string('prof_endnumero', 30)->nullable();
			$table->string('prof_endcomplemento', 30)->nullable();
			$table->string('prof_endbairro', 50)->nullable();
			$table->string('prof_endcidade', 80)->nullable();
			$table->string('prof_enduf', 2)->nullable();
			$table->string('prof_endcep', 10)->nullable();
			$table->string('prof_urlstreaming');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_professor');
	}

}
