<?php
 
class PerfilTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('perfiles')->delete();
         //insert some dummy records
        DB::table('perfiles')->insert(array(
               	'id_perfil'=>'1',
               	'nombre_perfil'=>'Investigador',
               	'desc_perfil'=>'Agregar descripcion aqui'
               	));
        
        DB::table('perfiles')->insert(array(
                'id_perfil'=>'2',
                'nombre_perfil'=>'Usuario',
                'desc_perfil'=>'Agregar descripcion aqui'
                ));

        DB::table('perfiles')->insert(array(
                'id_perfil'=>'3',
                'nombre_perfil'=>'Administrador',
                'desc_perfil'=>'Agregar descripcion aqui'
                ));

  }
 
}