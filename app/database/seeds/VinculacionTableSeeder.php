<?php
 
class VinculacionTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('vinculaciones')->delete();
        
        $proyectoVinculacionOne = Vinculacion::create(array(
            'folio_proyecto'            => '1',
            'razones'                   =>'Lorem ipsum dolor sit amet.',
            'sinergias_marketing'       =>'Lorem ipsum dolor.',
            'sinergias_tecnologias'     =>'Lorem ipsum dolor sit amet.',
            'sinergias_produccion'      =>'Lorem ipsum dolor sit.', 
        ));

  }
 
}