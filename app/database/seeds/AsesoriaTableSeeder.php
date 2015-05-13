<?php
 
class AsesoriaTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('asesorias')->delete();
        
        $proyectoAsesoriaOne = Asesoria::create(array(
            'folio_proyecto'                => '1',
            'pregunta_1'                    =>'Lorem ipsum dolor sit amet.',
            'pregunta_2'                    =>'Lorem ipsum dolor.',
            'pregunta_3'                    =>'Lorem ipsum dolor sit amet.',
            'pregunta_4'                    =>'Lorem ipsum dolor sit.',
            'responsable_del_proyecto'      =>'Lorem ipsum dolor sit.',  
        ));

  }
 
}