<?php

class InstitucionController extends Controller {

	

	public function create(){	
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = Proyecto::ObtenerProyecto()->take(1)->get();
		return View::make('institucion/create',array('perfiles' => $perfiles,'proyectos'=>$proyectos));
	}

	public function store(){
		$data=array(
			'campo0'  => Input::get('campo0'),
			'campo1'  => Input::get('campo1'),
			'campo2'  => Input::get('campo2'),
			'campo3'  => Input::get('campo3'),
			'campo4'  => Input::get('campo4'),
			'campo5'  => Input::get('campo5'),
			'campo6'  => Input::get('campo6'),
			'campo7'  => Input::get('campo7'),
			'campo8'  => Input::get('campo8'),
			'campo9'  => Input::get('campo9'),
			'campo10' => Input::get('campo10'),
			'campo11' => Input::get('campo11'),
			'campo12' => Input::get('campo12'),
			'campo13' => Input::get('campo13'),
			'campo14' => Input::get('campo14'),
			'campo15' => Input::get('campo15'),
			'campo16' => Input::get('campo16'),
			);

		$rules=array(
			'campo0'  => 'required|numeric|min:1|max:100000',
			'campo1'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo5'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo6'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo7'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo8'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo9'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo10' => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo11' => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo12' => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo13' => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo14' => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo15' => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo16' => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			);

		$messages=([
			'required'   => 'El campo es obligatorio.',
			'numeric'    => 'El campo debe ser numérico',
			'regex'      => 'El formato del campo es inválido',
			'campo0.min' => 'El tamaño del campo debe ser de al menos :min número.',
			'min'        => 'El campo debe contener al menos :min caracteres.',
			'unique'	 => 'El folio ya ha sido registrado.'
		]);
	
		$validator = Validator::make($data, $rules,$messages);

		if($validator->passes()){
			if(Request::ajax()){
			$institucion                             = new Institucion;
			$institucion ->folio_proyecto            = Input::get('campo0');
			$institucion ->registro                  = Input::get('campo1');
			$institucion ->equipamento               = Input::get('campo2');
			$institucion ->diseño_o_prototipo        = Input::get('campo3');
			$institucion ->realizaciones             = Input::get('campo4');
			$institucion ->escalamiento_piloto       = Input::get('campo5');
			$institucion ->grupo_trabajo_vinculacion = Input::get('campo6');
			$institucion ->esquema                   = Input::get('campo7');
			$institucion ->descripcion_actividades   = Input::get('campo8');
			$institucion ->entregables               = Input::get('campo9');
			$institucion ->descripcion_participacion = Input::get('campo10');
			$institucion ->informacion_contacto      = Input::get('campo11');
			$institucion ->grupo_de_trabajo          = Input::get('campo12');
			$institucion ->grado_academico           = Input::get('campo13');
			$institucion ->producto                  = Input::get('campo14');
			$institucion ->informacion_participante  = Input::get('campo15');
			$institucion ->actividades_especificos   = Input::get('campo16');
			$institucion->save();

			
			return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'Success'
                                    ]);  
			}else{
			/*$institucion                             = new Institucion;
			$institucion ->folio_proyecto            = Input::get('campo0');
			$institucion ->registro                  = Input::get('campo1');
			$institucion ->equipamento               = Input::get('campo2');
			$institucion ->diseño_o_prototipo        = Input::get('campo3');
			$institucion ->realizaciones             = Input::get('campo4');
			$institucion ->escalamiento_piloto       = Input::get('campo5');
			$institucion ->grupo_trabajo_vinculacion = Input::get('campo6');
			$institucion ->esquema                   = Input::get('campo7');
			$institucion ->descripcion_actividades   = Input::get('campo8');
			$institucion ->entregables               = Input::get('campo9');
			$institucion ->descripcion_participacion = Input::get('campo10');
			$institucion ->informacion_contacto      = Input::get('campo11');
			$institucion ->grupo_de_trabajo          = Input::get('campo12');
			$institucion ->grado_academico           = Input::get('campo13');
			$institucion ->producto                  = Input::get('campo14');
			$institucion ->informacion_participante  = Input::get('campo15');
			$institucion ->actividades_especificos   = Input::get('campo16');
			$institucion->save();*/
			
			return Redirect::to('proyectos/seccion/9')	
         			->with('message_exito', 'Sección 9');	
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
                                        'success' => false,
                                        'errors' => $validator ->getMessageBag()->toArray(),
                                        'message' => "Revise los campos porfavor."
                                    ]);
			 }else{

			 	return Redirect::to('proyectos/seccion/9')
        			->withErrors($validator)
                	->withInput();
			 }
			
		}
	}

	public function show(){

	}

	public function edit(){

	}

	public function update(){

	}

	public function destroy(){

	}
}
