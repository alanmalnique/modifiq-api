<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTransacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_transacao', function(Blueprint $table)
		{
			$table->integer('tsc_id', true);
			$table->integer('alu_id')->index('fk_tbl_transacao_tbl_aluno1');
			$table->integer('plan_id')->index('fk_tbl_transacao_tbl_planos1');
			$table->dateTime('tsc_datahora');
			$table->string('tsc_cartaofinal', 4);
			$table->integer('tsc_bandeira');
			$table->float('tsc_valor', 11);
			$table->dateTime('tsc_dthrpagto');
			$table->date('tsc_dataprevrecimento');
			$table->smallInteger('tsc_recebido')->default(0)->comment('0-N, 1-S');
			$table->float('tsc_taxaadquirente', 4);
			$table->float('tsc_valoradquirente', 4);
			$table->float('tsc_valorrecebido', 11)->nullable();
			$table->integer('tsc_status');
			$table->string('tsc_paymentid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_transacao');
	}

}
