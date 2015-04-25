<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMercadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mercados', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			//primary key
			$table->increments('id'); // id auto incremental primary key
			//Foreign Key
			$table->integer('folio_proyecto');
			$table->foreign('folio_proyecto')->references('folio')->on('proyectos')->onDelete('cascade');
			//Tuplas
			$table->string('mercado');
			$table->string('modelo_de_negocio');
			$table->double('precio');
			$table->string('proyecciones');
			$table->string('enfoque_de_insercion');
			$table->string('cliente_objetivo');
			$table->string('beneficios');
			$table->string('competencia');
			$table->string('patentes_similares');
			$table->string('barreras');
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
		Schema::drop('mercados');
	}

}
