<?php

class VinculacionController extends Controller {

	

	public function create(){	
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = Proyecto::ObtenerProyecto()->take(1)->get();
		return View::make('vinculacion/create',array('perfiles' => $perfiles,'proyectos'=>$proyectos));
	}

	public function store(){
		$data=array(
			'campo0'  => Input::get('campo0'),
			'campo1'  => Input::get('campo1'),
			'campo2'  => Input::get('campo2'),
			'campo3'  => Input::get('campo3'),
			'campo4'  => Input::get('campo4'),
			);

		$rules=array(
			'campo0'  => 'required|numeric|min:1|max:100000|unique:vinculaciones,folio_proyecto',
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/',

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

				$vinculacion                        = new Vinculacion;
				$vinculacion->folio_proyecto        = Input::get('campo0');
				$vinculacion->razones               = Input::get('campo1');
				$vinculacion->sinergias_marketing   = Input::get('campo2');
				$vinculacion->sinergias_tecnologias = Input::get('campo3');
				$vinculacion->sinergias_produccion  = Input::get('campo4');
				$vinculacion->save();
				

				return Response::json
	                                    ([
	                                        'success' => true,
	                                        'message' => 'El registro de esta sección fue todo un éxito.'
	                                    ]);  
			}else{
				$vinculacion                        = new Vinculacion;
				$vinculacion->folio_proyecto        = Input::get('campo0');
				$vinculacion->razones               = Input::get('campo1');
				$vinculacion->sinergias_marketing   = Input::get('campo2');
				$vinculacion->sinergias_tecnologias = Input::get('campo3');
				$vinculacion->sinergias_produccion  = Input::get('campo4');
				$vinculacion->save();
			
				return Redirect::to('proyectos/seccion/8')	
	         			->with('message_exito', 'Sección 8');	
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
										'success'    => false,
										'errors'     => $validator ->getMessageBag()->toArray(),
										'message'    => 'Revise los campos porfavor.',
										'validation' => 'El campo debe ser numérico'
                                    ]);
			 }else{

			 	return Redirect::to('proyectos/seccion/7')
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
