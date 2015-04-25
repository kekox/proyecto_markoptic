<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajoDetalladoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trabajo_detallado', function(Blueprint $table)
		{
			$table->increments('id'); // id auto incremental primary key

			$table->integer('proyectos_folio');
			
			$table->string('plan_de_trabajo');
			$table->string('desc_justificacion_actividades');
			$table->string('producto_etapa');
			$table->string('desc_etapas');
			$table->string('presupuesto');


			


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
		Schema::drop('trabajo_detallado');
	}

}
