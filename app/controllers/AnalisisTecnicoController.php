<?php

class AnalisisTecnicoController extends Controller {

	

	public function create(){	
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = Proyecto::ObtenerProyecto()->take(1)->get();
		return View::make('analisistecnico/create',array('perfiles' => $perfiles,'proyectos'=>$proyectos));
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
			);

		$rules=array(
			'campo0'  => 'required|numeric|min:1|max:100000|unique:analisis_tecnicos,folio_proyecto',
			'campo1'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo2'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo3'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo4'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo5'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo6'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo7'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			);

		$messages=([
			'required'   => 'El campo es obligatorio.',
			'numeric'    => 'El campo debe ser numérico',
			'regex'      => 'El formato del campo es inválido',
			'campo0.min' => 'El tamaño del campo debe ser de al menos :min número.',
			'min'        => 'El campo debe contener al menos :min caracteres.',
			'unique'	 => 'El folio ya ha sido registrado'
		]);
	
		$validator = Validator::make($data, $rules,$messages);

		if($validator->passes()){
			if(Request::ajax()){
				$analisistecnico                          = new AnalisisTecnico;
				$analisistecnico->folio_proyecto          = Input::get('campo0');
				$analisistecnico->antecedentes            = Input::get('campo1');
				$analisistecnico->edo_tec_1               = Input::get('campo2');
				$analisistecnico->edo_tec_2               = Input::get('campo3');
				$analisistecnico->edo_tec_3               = Input::get('campo4');
				$analisistecnico->edo_tec_4               = Input::get('campo5');
				$analisistecnico->edo_tec_5               = Input::get('campo6');
				$analisistecnico->origen_de_la_tecnologia = Input::get('campo7');
				$analisistecnico->save();

			
			return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'Success'
                                    ]);  
			}else{
				/*$analisistecnico                          = new AnalisisTecnico;
				$analisistecnico->folio_proyecto          = Input::get('campo0');
				$analisistecnico->antecedentes            = Input::get('campo1');
				$analisistecnico->edo_tec_1               = Input::get('campo2');
				$analisistecnico->edo_tec_2               = Input::get('campo3');
				$analisistecnico->edo_tec_3               = Input::get('campo4');
				$analisistecnico->edo_tec_4               = Input::get('campo5');
				$analisistecnico->edo_tec_5               = Input::get('campo6');
				$analisistecnico->origen_de_la_tecnologia = Input::get('campo7');
				$analisistecnico->save();*/

			
			return Redirect::to('proyectos/seccion/2')	
         			->with('message_exito', 'Sección 2');	
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
										'success' => false,
										'errors'  => $validator ->getMessageBag()->toArray(),
										'message' => 'Revise los campos porfavor.'
                                    ]);
			 }else{

			 	return Redirect::to('proyectos/seccion/3')
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
