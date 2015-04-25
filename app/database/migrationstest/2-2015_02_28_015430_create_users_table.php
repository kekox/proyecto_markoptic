<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('users', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			//id auto incremental primary key
			$table->increments('id'); 
			//Foreign Key
            $table->integer('id_perfil')->unsigned();
            $table->foreign('id_perfil')->references('id')->on('perfiles');
			//Tuplas
            $table->string('nombre', 50);  
            $table->string('apellido_Paterno',50);
            $table->string('apellido_Materno',50);
            $table->string('email', 100)->unique();  
            $table->string('password', 200);
            $table->string('remember_token', 200);  
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
		Schema::drop('users');
	}

}
