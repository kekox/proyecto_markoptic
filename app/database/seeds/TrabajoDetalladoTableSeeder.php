<?php
 
class TrabajoDetalladoTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('trabajos_detallados')->delete();
        
        $proyectoTrabajoDetalladoOne = TrabajoDetallado::create(array(
            'folio_proyecto'                       => '1',
            'plan_de_trabajo'                      =>'Lorem ipsum dolor sit amet.',
            'desc_justificacion_actividades'       =>'Lorem ipsum dolor.',
            'producto_etapa'                       =>'Lorem ipsum dolor sit amet.',
            'desc_etapas'                          =>'Lorem ipsum dolor sit.',
            'presupuesto'                          =>'Lorem ipsum dolor sit.',  
        ));

  }
 
}