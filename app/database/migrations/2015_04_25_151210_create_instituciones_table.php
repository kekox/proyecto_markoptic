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
			$table->engine ='InnoDB';
			//primary key
			$table->increments('id'); 
			//Foreign Key
			$table->integer('folio_proyecto');
			$table->foreign('folio_proyecto')->references('folio')->on('proyectos')->onDelete('cascade');
			//Tuplas
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
		Schema::drop('instituciones');
	}

}
