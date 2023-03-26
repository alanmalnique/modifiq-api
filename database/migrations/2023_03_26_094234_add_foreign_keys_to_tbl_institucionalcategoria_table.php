<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTblInstitucionalcategoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tbl_institucionalcategoria', function(Blueprint $table)
		{
			$table->foreign('arq_id', 'fk_tbl_institucionalcategoria_tbl_arquivo1')->references('arq_id')->on('tbl_arquivo')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tbl_institucionalcategoria', function(Blueprint $table)
		{
			$table->dropForeign('fk_tbl_institucionalcategoria_tbl_arquivo1');
		});
	}

}
