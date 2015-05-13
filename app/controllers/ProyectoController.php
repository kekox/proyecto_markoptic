<?php

class ProyectoController extends Controller {

	

	public function create()
	{	
		$id       = Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
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
			'campo0'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo1'  => 'required|numeric|min:1|max:100000|unique:proyectos,folio',
			'campo2'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo3'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo4'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo5'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo6'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo7'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo8'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo9'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo10' => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo11' => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo12' => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			);

		$validator = Validator::make($data, $rules);

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
                                        'message' => 'Success'
                                    ]);  
			}else{
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
			
			return Redirect::to('proyectos/seccion/2')	
         			->with('message_exito', 'Sección 2');	
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
                                        'success' => false,
                                        'errors' => $validator ->getMessageBag()->toArray()
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

	public function destroy(){

	}
}
