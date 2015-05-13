<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('users')->delete();
         
        $Admin = User::create(array(
            'perfil_id'         => '3',
            'nombre'            => 'Daniel',
            'apellido_Paterno'  => 'Paredes',
            'apellido_Materno'  => 'Rivas',
            'email'             => 'keko_daniel@hotmail.com',
            'password'          => Hash::make('keko1234')
        ));


        $faker = Faker\Factory::create();

        for ($i = 0; $i < 25; $i++)
          {
            $user = User::create(array(
              'perfil_id'           => $faker->numberBetween($min = 1, $max = 2),
              'nombre'              => $faker->userName,
              'apellido_Paterno'    => $faker->firstName,
              'apellido_Materno'    => $faker->lastName,
              'email'               => $faker->email,
              'password'            => Hash::make('password')
            ));
          }

  }
 
}