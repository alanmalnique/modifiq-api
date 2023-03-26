<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblParceirosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_parceiros', function(Blueprint $table)
		{
			$table->integer('parc_id', true);
			$table->integer('arq_id')->index('fk_tbl_parceiros_tbl_arquivo1');
			$table->string('parc_nome', 50);
			$table->text('parc_descricao');
			$table->string('parc_link')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_parceiros');
	}

}
