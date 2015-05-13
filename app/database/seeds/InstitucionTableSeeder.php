<?php
 
class InstitucionTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('instituciones')->delete();
        
        $proyectoVinculacionOne = Institucion::create(array(
            'folio_proyecto'                => '1',
            'registro'                      =>'Lorem ipsum dolor sit amet.',
            'equipamento'                   =>'Lorem ipsum dolor.',
            'diseño_o_prototipo'            =>'Lorem ipsum dolor sit amet.',
            'realizaciones'                 =>'Lorem ipsum dolor sit.', 
            'escalamiento_piloto'           =>'Lorem ipsum dolor sit amet.',
            'grupo_trabajo_vinculacion'     =>'Lorem ipsum dolor.',
            'esquema'                       =>'Lorem ipsum dolor sit amet.',
            'descripcion_actividades'       =>'Lorem ipsum dolor sit.', 
            'entregables'                   =>'Lorem ipsum dolor sit amet.',
            'descripcion_participacion'     =>'Lorem ipsum dolor.',
            'informacion_contacto'          =>'Lorem ipsum dolor sit amet.',
            'grupo_de_trabajo'              =>'Lorem ipsum dolor sit.', 
            'grado_academico'               =>'Lorem ipsum dolor.',
            'producto'                      =>'Lorem ipsum dolor sit amet.',
            'informacion_participante'      =>'Lorem ipsum dolor sit.', 
            'actividades_especificos'       =>'Lorem ipsum dolor.'
           
        ));

  }
 
}