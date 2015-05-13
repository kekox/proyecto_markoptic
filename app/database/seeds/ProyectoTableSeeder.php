<?php
 
class ProyectoTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('proyectos')->delete();
         

        $usuario = User::create(array(
            'perfil_id'         => '1',
            'nombre'            => 'Test',
            'apellido_Paterno'  => 'Test',
            'apellido_Materno'  => 'Test',
            'email'             => 'Test@hotmail.com',
            'password'          => Hash::make('keko1234')
        ));
        
        $proyectoOne = Proyecto::create(array(
            'folio'                   =>'0001',
            'id_user'                 => $usuario->id,
            'nombre_proyecto'         =>'Proyecto Ambiental',
            'modalidad'               =>'Presencial',
            'tipo_de_proyecto'        =>'Social',
            'contextualizacion'       =>'Lorem ipsum dolor sit amet.',
            'propuesta'               =>'Lorem ipsum dolor sit amet.',
            'area_industrial'         =>'Lorem ipsum dolor sit amet, consectetur.',
            'area_conocimiento'       =>'Lorem ipsum dolor sit.',
            'palabras_clave'          =>'Ambiental',
            'descripcion_innovacion'  =>'Lorem ipsum dolor.',
            'tipo_innovacion'         =>'Lorem ipsum.',
            'grado_innovacion'        =>'Lorem ipsum dolor.',
            'tipo_mercado'            =>'Lorem ipsum dolor sit.'
        ));

        
        
        $proyectoTwo = Proyecto::create(array(
            'folio'                   =>'027',
            'id_user'                 => 2,
            'nombre_proyecto'         =>'Proyecto Ambiental',
            'modalidad'               =>'Presencial',
            'tipo_de_proyecto'        =>'Social',
            'contextualizacion'       =>'Lorem ipsum dolor sit amet.',
            'propuesta'               =>'Lorem ipsum dolor sit amet.',
            'area_industrial'         =>'Lorem ipsum dolor sit amet, consectetur.',
            'area_conocimiento'       =>'Lorem ipsum dolor sit.',
            'palabras_clave'          =>'Ambiental',
            'descripcion_innovacion'  =>'Lorem ipsum dolor.',
            'tipo_innovacion'         =>'Lorem ipsum.',
            'grado_innovacion'        =>'Lorem ipsum dolor.',
            'tipo_mercado'            =>'Lorem ipsum dolor sit.'
        ));

        $proyectoThree = Proyecto::create(array(
            'folio'                   =>'017',
            'id_user'                 => 2,
            'nombre_proyecto'         =>'Proyecto Ambiental',
            'modalidad'               =>'Presencial',
            'tipo_de_proyecto'        =>'Social',
            'contextualizacion'       =>'Lorem ipsum dolor sit amet.',
            'propuesta'               =>'Lorem ipsum dolor sit amet.',
            'area_industrial'         =>'Lorem ipsum dolor sit amet, consectetur.',
            'area_conocimiento'       =>'Lorem ipsum dolor sit.',
            'palabras_clave'          =>'Ambiental',
            'descripcion_innovacion'  =>'Lorem ipsum dolor.',
            'tipo_innovacion'         =>'Lorem ipsum.',
            'grado_innovacion'        =>'Lorem ipsum dolor.',
            'tipo_mercado'            =>'Lorem ipsum dolor sit.'
        ));
       
       
      
      $proyectoFour = Proyecto::create(array(
            'folio'                   =>'005',
            'id_user'                 => 2,
            'nombre_proyecto'         =>'Proyecto Ambiental',
            'modalidad'               =>'Presencial',
            'tipo_de_proyecto'        =>'Social',
            'contextualizacion'       =>'Lorem ipsum dolor sit amet.',
            'propuesta'               =>'Lorem ipsum dolor sit amet.',
            'area_industrial'         =>'Lorem ipsum dolor sit amet, consectetur.',
            'area_conocimiento'       =>'Lorem ipsum dolor sit.',
            'palabras_clave'          =>'Ambiental',
            'descripcion_innovacion'  =>'Lorem ipsum dolor.',
            'tipo_innovacion'         =>'Lorem ipsum.',
            'grado_innovacion'        =>'Lorem ipsum dolor.',
            'tipo_mercado'            =>'Lorem ipsum dolor sit.'
        ));



  }
 
}