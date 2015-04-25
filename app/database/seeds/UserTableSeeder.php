<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
         DB::table('users')->delete();
         //insert some dummy records
        /*DB::table('users')->insert(array(
                'perfil_id'=>'3',
               	'nombre'=>'Daniel',
               	'apellido_Paterno'=>'Paredes',
               	'apellido_Materno'=>'Rivas',
               	'email'=>'keko_daniel@hotmail.com',
               	'password'=>Hash::make('keko1234')
               	));
        */
        $Admin = User::create(array(
            'perfil_id'         => '3',
            'nombre'            => 'Daniel',
            'apellido_Paterno'  => 'Paredes',
            'apellido_Materno'  => 'Rivas',
            'email'             => 'keko_daniel@hotmail.com',
            'password'          => Hash::make('keko1234')
        ));

  }
 
}