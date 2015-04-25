<?php
 
class AnalisisComercialTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('analisis_comerciales')->delete();
        
        $ProyectoAnalisisComercialOne = AnalisisComercial::create(array(
            'folio_proyecto'              => '1',
            'caracteristicas_empresa'     =>'Lorem ipsum dolor sit amet.',
            'funciones_criticas'          =>'Lorem ipsum dolor.',
            'experiencia_personal'        =>'Lorem ipsum dolor.',
            'record_de_exito'             =>'Lorem ipsum dolor sit.'     
        ));

  }
 
}