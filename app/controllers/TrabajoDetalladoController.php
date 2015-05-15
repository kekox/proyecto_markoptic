<?php

class TrabajoDetalladoController extends Controller {

	

	public function create(){	
		$id= Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		$idselected = Auth::user()->id;

		$proyectos = Proyecto::orderBy('created_at','desc')->where('id_user','=',$idselected)->take(1)->get();
		return View::make('trabajodetallado/create',array('perfiles' => $perfiles,'proyectos'=>$proyectos));
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
			'campo0'  => 'required|numeric|min:1|max:100000|unique:trabajos_detallados,folio_proyecto',
			'campo1'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo2'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo3'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo4'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo5'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			);

		$validator = Validator::make($data, $rules);

		if($validator->passes()){
			if(Request::ajax()){

				/*$trabajodetallado                                  = new TrabajoDetallado;
				$trabajodetallado ->folio_proyecto                 = Input::get('campo0');
				$trabajodetallado ->plan_de_trabajo                = Input::get('campo1');
				$trabajodetallado ->desc_justificacion_actividades = Input::get('campo2');
				$trabajodetallado ->producto_etapa                 = Input::get('campo3');
				$trabajodetallado ->desc_etapas                    = Input::get('campo4');
				$trabajodetallado ->presupuesto                    = Input::get('campo5');
				$trabajodetallado ->save();*/
								
				return Response::json
	                                    ([
	                                        'success' => true,
	                                        'message' => 'Success'
	                                    ]);  
			}else{

				/*$trabajodetallado                                  = new TrabajoDetallado;
				$trabajodetallado ->folio_proyecto                 = Input::get('campo0');
				$trabajodetallado ->plan_de_trabajo                = Input::get('campo1');
				$trabajodetallado ->desc_justificacion_actividades = Input::get('campo2');
				$trabajodetallado ->producto_etapa                 = Input::get('campo3');
				$trabajodetallado ->desc_etapas                    = Input::get('campo4');
				$trabajodetallado ->presupuesto                    = Input::get('campo5');
				$trabajodetallado ->save();*/
							
				return Redirect::to('proyectos/seccion/10')	
	         			->with('message_exito', 'Sección 10');	
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
                                        'success' => false,
                                        'errors' => $validator ->getMessageBag()->toArray()
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
