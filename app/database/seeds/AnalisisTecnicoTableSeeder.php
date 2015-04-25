<?php
 
class AnalisisTecnicoTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('analisis_tecnicos')->delete();
        
        $ProyectoAnalisisTecnicoOne = AnalisisTecnico::create(array(
            'folio_proyecto'            => '1',
            'antecedentes'             =>'Lorem ipsum dolor sit amet.',
            'edo_tec_1'                 =>'Lorem ipsum dolor.',
            'edo_tec_2'                 =>'Lorem ipsum dolor.',
            'edo_tec_3'                 =>'Lorem ipsum dolor sit.',
            'edo_tec_4'                 =>'Lorem ipsum dolor sit amet.',
            'edo_tec_5'                 =>'Lorem ipsum dolor sit amet.',
            'origen_de_la_tecnologia'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ipsam.'
            
        ));

  }
 
}