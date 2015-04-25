<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescripcionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('descripciones', function(Blueprint $table)
		{
			$table->increments('id'); // id auto incremental primary key

			$table->integer('proyectos_folio');
			$table->string('descripcion_propuesta');
			$table->string('principales_actividades');
			$table->string('principales_entregables');
			$table->string('objetivo_gral');
			$table->string('resultados_esperados');
			$table->string('descripcion_estrategica_tec');
           
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
		Schema::drop('descripciones');
	}

}
