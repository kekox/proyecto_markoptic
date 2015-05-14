<?php

class GeneralController extends Controller {

	

	public function create(){	
		$id= Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		$idselected = Auth::user()->id;

		$proyectos = Proyecto::orderBy('created_at','desc')->where('id_user','=',$idselected)->take(1)->get();
		return View::make('general/create',array('perfiles' => $perfiles,'proyectos'=>$proyectos));
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
			);

		$rules=array(
			'campo0'  => 'required|numeric|min:1|max:100000|unique:generales,folio_proyecto',
			'campo1'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo2'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo3'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo4'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo5'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo6'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo7'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo8'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo9'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			);

		$validator = Validator::make($data, $rules);

		if($validator->passes()){
			if(Request::ajax()){
				$general                                  = new General;
				$general->folio_proyecto                  = Input::get('campo0');
				$general->nivel_de_tecnologia             = Input::get('campo1');
				$general->nivel_de_innovacion             = Input::get('campo2');
				$general->riesgo_tecnico                  = Input::get('campo3');
				$general->principal_resultado             = Input::get('campo4');
				$general->presupuesto_de_proyecto         = Input::get('campo5');
				$general->administracion_del_proyecto     = Input::get('campo6');
				$general->disponibilidad_y_compatibilidad = Input::get('campo7');
				$general->plan_de_proteccion              = Input::get('campo8');
				$general->generacion_de_ingresos          = Input::get('campo9');
				$general->save();

				return Response::json
	                                    ([
	                                        'success' => true,
	                                        'message' => 'Success'
	                                    ]);  
			}else{
				$general                                  = new General;
				$general->folio_proyecto                  = Input::get('campo0');
				$general->nivel_de_tecnologia             = Input::get('campo1');
				$general->nivel_de_innovacion             = Input::get('campo2');
				$general->riesgo_tecnico                  = Input::get('campo3');
				$general->principal_resultado             = Input::get('campo4');
				$general->presupuesto_de_proyecto         = Input::get('campo5');
				$general->administracion_del_proyecto     = Input::get('campo6');
				$general->disponibilidad_y_compatibilidad = Input::get('campo7');
				$general->plan_de_proteccion              = Input::get('campo8');
				$general->generacion_de_ingresos          = Input::get('campo9');
				$general->save();
			
				return Redirect::to('proyectos/seccion/6')	
	         			->with('message_exito', 'Sección 6');	
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

			 	return Redirect::to('proyectos/seccion/5')
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
