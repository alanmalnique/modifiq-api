<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_blog', function(Blueprint $table)
		{
			$table->integer('blog_id', true);
			$table->integer('arq_id')->index('fk_tbl_blog_tbl_arquivo1');
			$table->integer('parc_id')->nullable()->index('fk_tbl_blog_tbl_parceiros1');
			$table->string('blog_titulo', 100);
			$table->smallInteger('blog_ativo')->default(1)->comment('0-N, 1-S');
			$table->text('blog_resumo');
			$table->text('blog_texto');
			$table->dateTime('blog_datahora');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_blog');
	}

}
