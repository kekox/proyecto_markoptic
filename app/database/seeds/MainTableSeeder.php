<?php
 
class MainTableSeeder extends Seeder {
 
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

        $faker = Faker\Factory::create();

        /* Ingresando datos a la tabla usuarios*/
        for ($i = 0; $i < 25; $i++)
        {
          $user = User::create(array(
              'perfil_id'           => $faker->numberBetween($min = 1, $max = 2),
              'nombre'              => $faker->userName,
              'apellido_Paterno'    => $faker->firstName,
              'apellido_Materno'    => $faker->lastName,
              'email'               => $faker->email,
              'password'            => Hash::make('password')
            ));
        }
        
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

        $proyectoMercadoOne = Mercado::create(array(
            'folio_proyecto'            => $proyectoOne->folio,
            'mercado'                   =>'Lorem ipsum dolor sit amet.',
            'modelo_de_negocio'         =>'Lorem ipsum dolor.',
            'precio'                    =>'5000.00',
            'proyecciones'              =>'Lorem ipsum dolor sit.',
            'enfoque_de_insercion'      =>'Lorem ipsum dolor sit.',
            'cliente_objetivo'          =>'Lorem ipsum dolor sit.',
            'beneficios'                =>'Lorem ipsum dolor sit.',
            'competencia'               =>'Lorem ipsum dolor sit.',    
            'patentes_similares'        =>'Lorem ipsum dolor sit.',
            'barreras'                  =>'Lorem ipsum dolor sit.',  
        ));

        $proyectoVinculacionOne = Vinculacion::create(array(
            'folio_proyecto'            => $proyectoOne->folio,
            'razones'                   =>'Lorem ipsum dolor sit amet.',
            'sinergias_marketing'       =>'Lorem ipsum dolor.',
            'sinergias_tecnologias'     =>'Lorem ipsum dolor sit amet.',
            'sinergias_produccion'      =>'Lorem ipsum dolor sit.', 
        ));

        $proyectoInstitucionOne = Institucion::create(array(
            'folio_proyecto'                => $proyectoOne->folio,
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
            'actividades_especificos'       =>'Lorem ipsum dolor.',
           
        ));

         $proyectoTrabajoDetalladoOne = TrabajoDetallado::create(array(
            'folio_proyecto'                       => $proyectoOne->folio,
            'plan_de_trabajo'                      =>'Lorem ipsum dolor sit amet.',
            'desc_justificacion_actividades'       =>'Lorem ipsum dolor.',
            'producto_etapa'                       =>'Lorem ipsum dolor sit amet.',
            'desc_etapas'                          =>'Lorem ipsum dolor sit.',
            'presupuesto'                          =>'Lorem ipsum dolor sit.',  
        ));

          $proyectoAsesoriaOne = Asesoria::create(array(
            'folio_proyecto'                => $proyectoOne->folio,
            'pregunta_1'                    =>'Lorem ipsum dolor sit amet.',
            'pregunta_2'                    =>'Lorem ipsum dolor.',
            'pregunta_3'                    =>'Lorem ipsum dolor sit amet.',
            'pregunta_4'                    =>'Lorem ipsum dolor sit.',
            'responsable_del_proyecto'      =>'Lorem ipsum dolor sit.',  
        ));

        



  }
 
}