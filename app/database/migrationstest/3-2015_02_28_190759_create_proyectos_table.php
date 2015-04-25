<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectos', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			//primary key
			$table->integer('folio');
			//Foreign Key
			$table->integer('id_user')->unsigned();
			$table->foreign('id_user')->references('id')->on('users');
			//Tuplas
            $table->string('modalidad', 50);
            $table->string('nombre_proyecto');
            $table->string('tipo_de_proyecto',50);
            $table->string('contextualizacion',255);
            $table->string('propuesta');
            $table->string('area_industrial');
            $table->string('area_conocimiento');
            $table->string('palabras_clave');
            $table->string('descripcion_innovacion');
            $table->string('tipo_innovacion');
            $table->string('grado_innovacion');
            $table->string('tipo_mercado');
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
			Schema::drop('proyectos');
	}

}
