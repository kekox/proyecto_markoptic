<?php
 
class GeneralTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('generales')->delete();
        
        $proyectoGeneralOne = General::create(array(
            'folio_proyecto'                      => '1',
            'nivel_de_tecnologia'                 =>'Lorem ipsum dolor sit amet.',
            'nivel_de_innovacion'                 =>'Lorem ipsum dolor.',
            'riesgo_tecnico'                      =>'Lorem ipsum dolor.',
            'principal_resultado'                 =>'Lorem ipsum dolor sit.',
            'presupuesto_de_proyecto'             =>'1200Lorem ipsum dolor sit.',
            'administracion_del_proyecto'          =>'Lorem ipsum dolor sit.',
            'disponibilidad_y_compatibilidad'     =>'Lorem ipsum dolor sit.',
            'plan_de_proteccion'                  =>'Lorem ipsum dolor sit.',    
            'generacion_de_ingresos'              =>'Lorem ipsum dolor sit.' 
        ));

  }
 
}