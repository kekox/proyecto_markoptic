<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asesorias', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			//primary key
			$table->increments('id');
			//Foreign Key
			$table->integer('folio_proyecto');
			$table->foreign('folio_proyecto')->references('folio')->on('proyectos')->onDelete('cascade');
			//Tuplas
			$table->string('pregunta_1');
			$table->string('pregunta_2');
			$table->string('pregunta_3');
			$table->string('pregunta_4');
			$table->string('responsable_del_proyecto');
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
		Schema::drop('asesorias');
	}

}
