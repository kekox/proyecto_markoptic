<?php

class VinculacionController extends Controller {

	

	public function create(){	
		$id= Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		$idselected = Auth::user()->id;

		$proyectos = Proyecto::orderBy('created_at','desc')->where('id_user','=',$idselected)->take(1)->get();
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
			'campo1'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo2'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo3'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo4'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',

			);

		$validator = Validator::make($data, $rules);

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
	                                        'message' => 'Success'
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
                                        'success' => false,
                                        'errors' => $validator ->getMessageBag()->toArray(),
                                        'message' => 'Revise los campos porfavor*'
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
