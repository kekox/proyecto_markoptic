<?php

class AsesoriaController extends Controller {

	

	public function create(){	
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = Proyecto::ObtenerProyecto()->take(1)->get();
		return View::make('asesoria/create',array('perfiles' => $perfiles,'proyectos'=>$proyectos));
	}

	public function store(){

		$data=array(
			'campo0'  => Input::get('campo0'),
			'campo1'  => Input::get('campo1'),
			'campo2'  => Input::get('campo2'),
			'campo3'  => Input::get('campo3'),
			'campo4'  => Input::get('campo4'),
			'campo5'  => Input::get('campo5'),
			);

		$rules=array(
			'campo0'  => 'required|numeric|min:1|max:100000|unique:asesorias,folio_proyecto',
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo5'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			);

		$messages=([
			'required'   => 'El campo es obligatorio.',
			'numeric'    => 'El campo debe ser numérico',
			'regex'      => 'El formato del campo es inválido',
			'campo0.min' => 'El tamaño del campo debe ser de al menos :min número.',
			'min'        => 'El campo debe contener al menos :min caracteres.',
			'unique'	 => 'El folio ya ha sido registrado.'
		]);



		$validator = Validator::make($data, $rules, $messages);

		if($validator->passes()){
			if(Request::ajax()){

				$asesoria                           = new Asesoria;
				$asesoria->folio_proyecto           = Input::get('campo0');
				$asesoria->pregunta_1               = Input::get('campo1');
				$asesoria->pregunta_2               = Input::get('campo2');
				$asesoria->pregunta_3               = Input::get('campo3');
				$asesoria->pregunta_4               = Input::get('campo4');
				$asesoria->responsable_del_proyecto = Input::get('campo5');
				$asesoria->save();
				
			

			
			return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'Proyecto Agregado Exitosamente.'
                                    ]);  
			}else{
				
				/*$asesoria                           = new Asesoria;
				$asesoria->folio_proyecto           = Input::get('campo0');
				$asesoria->pregunta_1               = Input::get('campo1');
				$asesoria->pregunta_2               = Input::get('campo2');
				$asesoria->pregunta_3               = Input::get('campo3');
				$asesoria->pregunta_4               = Input::get('campo4');
				$asesoria->responsable_del_proyecto = Input::get('campo5');
				$asesoria->save();*/

			
			
			return Redirect::to('proyectos')	
         			->with('message_exito', 'Proyecto agregado satisfactoriamente.');
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
										'success'    => false,
										'errors'     => $validator ->getMessageBag()->toArray(),
										'message'    => 'Revise los campos porfavor',
										'validation' => 'El campo debe ser numérico'
                                    ]);
			 }else{

			 	return Redirect::to('proyectos/seccion/10')
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
