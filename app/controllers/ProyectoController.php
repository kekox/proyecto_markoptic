<?php

class ProyectoController extends Controller {

	

	public function create()
	{	
		$perfiles = Perfil::ObtenerPerfil()->get();
		return View::make('proyectos/create',array('perfiles' => $perfiles));
	}

	public function store()
	{
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
			);

		$rules=array(
			'campo0'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo1'  => 'required|numeric|min:1|max:100000|unique:proyectos,folio',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo5'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo6'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo7'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo8'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo9'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo10' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo11' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo12' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/',
			);

		$messages=([
			'required'   => 'El campo es obligatorio.',
			'numeric'    => 'El campo debe ser numérico',
			'regex'      => 'El formato del campo es inválido',
			'campo0.min' => 'El tamaño del campo debe ser de al menos :min número.',
			'min'        => 'El campo debe contener al menos :min caracteres.',
			'unique'	 => 'El folio ya ha sido registrado',
			]);

		$validator = Validator::make($data, $rules,$messages);

		if($validator->passes()){
			if(Request::ajax()){
			$proyecto                         = new Proyecto;
			$proyecto->folio                  = Input::get('campo1');
			$proyecto->id_user                = Auth::user()->id;
			$proyecto->nombre_proyecto        = Input::get('campo0');
			$proyecto->modalidad              = Input::get('campo2');
			$proyecto->tipo_de_proyecto       = Input::get('campo3');
			$proyecto->contextualizacion      = Input::get('campo4');
			$proyecto->propuesta              = Input::get('campo5');
			$proyecto->area_industrial        = Input::get('campo6');
			$proyecto->area_conocimiento      = Input::get('campo7');
			$proyecto->palabras_clave         = Input::get('campo8');
			$proyecto->descripcion_innovacion = Input::get('campo9');
			$proyecto->tipo_innovacion        = Input::get('campo10');
			$proyecto->grado_innovacion       = Input::get('campo11');
			$proyecto->tipo_mercado           = Input::get('campo12');
			$proyecto->save();
			
			return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'El registro de esta sección fue todo un éxito.'
                                    ]);  
			}else{
			/*$proyecto                         = new Proyecto;
			$proyecto->folio                  = Input::get('campo1');
			$proyecto->id_user                = Auth::user()->id;
			$proyecto->nombre_proyecto        = Input::get('campo0');
			$proyecto->modalidad              = Input::get('campo2');
			$proyecto->tipo_de_proyecto       = Input::get('campo3');
			$proyecto->contextualizacion      = Input::get('campo4');
			$proyecto->propuesta              = Input::get('campo5');
			$proyecto->area_industrial        = Input::get('campo6');
			$proyecto->area_conocimiento      = Input::get('campo7');
			$proyecto->palabras_clave         = Input::get('campo8');
			$proyecto->descripcion_innovacion = Input::get('campo9');
			$proyecto->tipo_innovacion        = Input::get('campo10');
			$proyecto->grado_innovacion       = Input::get('campo11');
			$proyecto->tipo_mercado           = Input::get('campo12');
			$proyecto->save();*/
			
			return Redirect::to('proyectos/seccion/2')	
         			->with('message_exito', 'Sección 2');	
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
										'success' => false,
										'errors'  => $validator ->getMessageBag()->toArray(),
										'message' => 'Revise los campos porfavor.',
										'message2'=> 'Folio existente. Seleccionar otro # de folio.'
                                    ]);
			 }else{

			 	return Redirect::to('proyectos/seccion/1')
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

	public function destroy($proyecto_folio){

		DB::table('proyectos')->where('folio', '=', $proyecto_folio)->delete();
        return Redirect::to('proyectos')
            ->with('message_delete','Proyecto Eliminado Correctamente');
	}
}
