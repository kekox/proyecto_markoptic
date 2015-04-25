<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisisComercialesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('analisis_comerciales', function(Blueprint $table)
		{
			$table->increments('id'); // id auto incremental primary key

			$table->integer('proyectos_folio');
			
			$table->string('antecedentes');
			$table->string('edo_tec_1');
			$table->string('edo_tec_2');
			$table->string('edo_tec_3');
			$table->string('edo_tec_4');
			$table->string('edo_tec_5');
			$table->string('oriden_de_la_tecnologia');           
            $table->timestamps();//campos para controlar inserts y updates //created_at updated_at
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('analisis_comerciales');
	}

}
