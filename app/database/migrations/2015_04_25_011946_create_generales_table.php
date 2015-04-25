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
			$table->engine ='InnoDB';
			//primary key
			$table->increments('id'); // id auto incremental primary key
			//Foreign Key
			$table->integer('folio_proyecto');
			$table->foreign('folio_proyecto')->references('folio')->on('proyectos')->onDelete('cascade');
			//Tuplas
			$table->string('nivel_de_tecnologia');
			$table->string('nivel_de_innovacion');
			$table->string('riesgo_tecnico');
			$table->string('principal_resultado');
			$table->string('presupuesto_de_proyecto');
			$table->string('administracion_del_proyecto');
			$table->string('disponibilidad_y_compatibilidad');
			$table->string('plan_de_proteccion');
			$table->string('generacion_de_ingresos');
			//Created_at & Updated_at
            $table->timestamps();
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
