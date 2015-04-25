<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instituciones', function(Blueprint $table)
		{
			$table->increments('id'); // id auto incremental primary key

			$table->integer('proyectos_folio');
			$table->string('registro');
			$table->string('equipamento');
			$table->string('diseño_o_prototipo');
			$table->string('realizaciones');
			$table->string('escalamiento_piloto');
			$table->string('grupo_trabajo_vinculacion');
			$table->string('esquema');
			$table->string('descripcion_actividades');
			$table->string('entregables');
			$table->string('descripcion_participacion');
			$table->string('informacion_contacto');
			$table->string('grupo_de_trabajo');
			$table->string('grado_academico');
			$table->string('producto');
			$table->string('informacion_participante');
			$table->string('actividades_especificos');


			


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
		Schema::drop('instituciones');
	}

}
