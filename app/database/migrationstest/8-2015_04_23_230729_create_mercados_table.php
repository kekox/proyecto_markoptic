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
			$table->increments('id'); // id auto incremental primary key

			$table->integer('proyectos_folio');

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
		Schema::drop('mercados');
	}

}
