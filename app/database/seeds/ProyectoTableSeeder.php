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
            'modalidad'               =>'Presencial',
            'nombre_proyecto'         =>'Proyecto Ambiental',
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

       $proyectoDescripcionOne = Descripcion::create(array(
            'folio_proyecto'                   =>$proyectoOne->folio,
            'descripcion_propuesta'            =>'Lorem ipsum dolor sit amet.',
            'principales_actividades'          =>'Lorem ipsum dolor.',
            'principales_entregables'          =>'Lorem ipsum dolor.',
            'objetivo_gral'                    =>'Lorem ipsum dolor sit.',
            'resultados_esperados'             =>'Lorem ipsum dolor sit amet.',
            'descripcion_estrategica_tec'      =>'Lorem ipsum dolor sit amet.'
            
        )); 

       $proyectoAnalisisTecnicoOne = AnalisisTecnico::create(array(
            'folio_proyecto'            => $proyectoOne->folio,
            'antecedentes'             =>'Lorem ipsum dolor sit amet.',
            'edo_tec_1'                 =>'Lorem ipsum dolor.',
            'edo_tec_2'                 =>'Lorem ipsum dolor.',
            'edo_tec_3'                 =>'Lorem ipsum dolor sit.',
            'edo_tec_4'                 =>'Lorem ipsum dolor sit amet.',
            'edo_tec_5'                 =>'Lorem ipsum dolor sit amet.',
            'origen_de_la_tecnologia'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ipsam.'
            
        ));

       $proyectoAnalisisComercialOne = AnalisisComercial::create(array(
            'folio_proyecto'              => $proyectoOne->folio,
            'caracteristicas_empresa'     =>'Lorem ipsum dolor sit amet.',
            'funciones_criticas'          =>'Lorem ipsum dolor.',
            'experiencia_personal'        =>'Lorem ipsum dolor.',
            'record_de_exito'             =>'Lorem ipsum dolor sit.'     
        ));

       $proyectoGeneralOne = General::create(array(
            'folio_proyecto'                      => $proyectoOne->folio,
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