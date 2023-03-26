<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblNewsletterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_newsletter', function(Blueprint $table)
		{
			$table->integer('news_id', true);
			$table->string('news_nome', 80);
			$table->string('news_whatsapp', 15);
			$table->string('news_email', 80);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_newsletter');
	}

}
