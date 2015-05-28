<?php

class AnalisisComercialController extends Controller {

	

	public function create(){	
		
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = Proyecto::ObtenerProyecto()->take(1)->get();

		return View::make('analisiscomercial/create',array('perfiles' => $perfiles,'proyectos'=>$proyectos));
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
			'campo0'  => 'required|numeric|min:1|max:100000|unique:analisis_comerciales,folio_proyecto',
			'campo1'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo2'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo3'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo4'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			);

		$messages=([
			'required'   => 'El campo es obligatorio.',
			'numeric'    => 'El campo debe ser numérico',
			'regex'      => 'El formato del campo es inválido',
			'campo0.min' => 'El tamaño del campo debe ser de al menos :min número.',
			'min'        => 'El campo debe contener al menos :min caracteres.',
			'unique'	 => 'El folio ya ha sido registrado'
		]);

		$validator = Validator::make($data, $rules, $messages);
		if($validator->passes()){
			if(Request::ajax())
			{
				$analisiscomercial                          = new AnalisisComercial;
				$analisiscomercial->folio_proyecto          = Input::get('campo0');
				$analisiscomercial->caracteristicas_empresa = Input::get('campo1');
				$analisiscomercial->funciones_criticas      = Input::get('campo2');
				$analisiscomercial->experiencia_personal    = Input::get('campo3');
				$analisiscomercial->record_de_exito         = Input::get('campo4');
				$analisiscomercial->save();


					
				return Response::json
                                    ([
										'success' => true,
										'message' => 'El registro de esta sección fue todo un éxito.'
                                    ]);  
			}else{
				/*$analisiscomercial                          = new AnalisisComercial;
				$analisiscomercial->folio_proyecto          = Input::get('campo0');
				$analisiscomercial->caracteristicas_empresa = Input::get('campo1');
				$analisiscomercial->funciones_criticas      = Input::get('campo2');
				$analisiscomercial->experiencia_personal    = Input::get('campo3');
				$analisiscomercial->record_de_exito         = Input::get('campo4');
				$analisistecnico->save();*/

				return Redirect::to('proyectos/seccion/4')	
         			->with('message_exito', 'Sección 4');	
			}
		}else{
			if(Request::ajax())
			{
				
				return Response::json
                                    ([
										'success'    => false,
										'errors'     => $validator ->getMessageBag()->toArray(),
										'message'    => 'Revise los campos porfavor.',
										'validation' => 'El campo debe ser numérico.'
                                    ]);
			}else{
				return Redirect::to('proyectos/seccion/4')
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
