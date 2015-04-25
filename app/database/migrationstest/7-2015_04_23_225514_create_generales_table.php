<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('generales', function(Blueprint $table)
		{
			$table->increments('id'); // id auto incremental primary key

			$table->integer('proyectos_folio');

			$table->string('nivel_de_tecnologia');
			$table->string('nivel_de_innovacion');
			$table->string('riesgo_tecnico');
			$table->string('principal_resultado');
			$table->string('presupuesto_de_proyecto');
			$table->string('administracion_del_proyecto');
			$table->string('disponibilidad_y_compatibilidad');
			$table->string('plan_de_proteccion');
			$table->string('generacion_de_ingresos');
			
			

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
		Schema::drop('generales');
	}

}
