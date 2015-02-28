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
			$table->increments('id'); // id auto incremental primary key
            $table->string('nombre', 50);  //varchar 50
            $table->string('email', 100);  //varchar 100
            $table->string('password', 200); //varchar 200 para encriptar los passwords
            $table->string('remember_token', 200);  //varchar 200 para encriptar los passwords
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
		Schema::drop('users');
	}

}
