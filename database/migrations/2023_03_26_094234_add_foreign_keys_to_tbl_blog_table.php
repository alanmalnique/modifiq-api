<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTblBlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tbl_blog', function(Blueprint $table)
		{
			$table->foreign('arq_id', 'fk_tbl_blog_tbl_arquivo1')->references('arq_id')->on('tbl_arquivo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('parc_id', 'fk_tbl_blog_tbl_parceiros1')->references('parc_id')->on('tbl_parceiros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tbl_blog', function(Blueprint $table)
		{
			$table->dropForeign('fk_tbl_blog_tbl_arquivo1');
			$table->dropForeign('fk_tbl_blog_tbl_parceiros1');
		});
	}

}
