<?php

class AsesoriaController extends Controller {

	

	public function create(){	
		$id= Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		$idselected = Auth::user()->id;

		$proyectos = Proyecto::orderBy('created_at','desc')->where('id_user','=',$idselected)->take(1)->get();
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
			'campo1'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo2'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo3'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo4'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo5'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			);

		$validator = Validator::make($data, $rules);

		if($validator->passes()){
			if(Request::ajax()){

				/*$asesoria                           = new Asesoria;
				$asesoria->folio_proyecto           = Input::get('campo0');
				$asesoria->pregunta_1               = Input::get('campo1');
				$asesoria->pregunta_2               = Input::get('campo2');
				$asesoria->pregunta_3               = Input::get('campo3');
				$asesoria->pregunta_4               = Input::get('campo4');
				$asesoria->responsable_del_proyecto = Input::get('campo5');
				$asesoria->save();*/
				
			

			
			return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'Proyecto Agregado Exitosamente'
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
         			->with('message_exito', 'Proyecto Agregado Exitosamente');
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
                                        'success' => false,
                                        'errors' => $validator ->getMessageBag()->toArray(),
                                        'message' => 'Revise los campos porfavor*',
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
