<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBannerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_banner', function(Blueprint $table)
		{
			$table->integer('ban_id', true);
			$table->integer('arq_id')->index('fk_tbl_banner_tbl_arquivo1');
			$table->string('ban_titulo', 50);
			$table->text('ban_descricao')->nullable();
			$table->string('ban_link')->nullable();
			$table->smallInteger('ban_ativo')->default(1)->comment('0-N, 1-S');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_banner');
	}

}
