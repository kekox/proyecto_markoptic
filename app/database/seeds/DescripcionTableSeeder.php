<?php
 
class DescripcionTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('descripciones')->delete();
        
        $ProyectoDescripcionOne = Descripcion::create(array(
            'folio_proyecto'                   => '1',
            'descripcion_propuesta'            =>'Lorem ipsum dolor sit amet.',
            'principales_actividades'          =>'Lorem ipsum dolor.',
            'principales_entregables'          =>'Lorem ipsum dolor.',
            'objetivo_gral'                    =>'Lorem ipsum dolor sit.',
            'resultados_esperados'             =>'Lorem ipsum dolor sit amet.',
            'descripcion_estrategica_tec'      =>'Lorem ipsum dolor sit amet.'
            
        ));

  }
 
}