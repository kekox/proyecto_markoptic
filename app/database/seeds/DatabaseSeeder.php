<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//call uses table seeder class
		$this->call('PerfilTableSeeder');
		//this message shown in your terminal after running db:seed command
		$this->command->info("Perfil table seeded :)");
		//call uses table seeder class
		$this->call('UserTableSeeder');
		//this message shown in your terminal after running db:seed command
		$this->command->info("Admin created :)");
		//call uses table seeder class
		$this->call('ProyectoTableSeeder');
		//this message shown in your terminal after running db:seed command
		$this->command->info("Proyecto table seeded :)");
		
	}

}
