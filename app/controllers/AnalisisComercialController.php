<?php

class AnalisisComercialController extends Controller {

	

	public function create(){	
		$id= Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();

		$proyectos = Proyecto::orderBy('created_at','desc')->take(1)->get();
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
			'campo0'  => 'required|numeric|min:1|max:100000|unique:analisis_tecnicos,folio_proyecto',
			'campo1'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo2'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo3'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo4'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			);

		$validator = Validator::make($data, $rules);
		if($validator->passes()){
			if(Request::ajax())
			{
				$analisiscomercial                          = new AnalisisComercial;
				$analisiscomercial->folio_proyecto          = Input::get('campo0');
				$analisiscomercial->caracteristicas_empresa = Input::get('campo1');
				$analisiscomercial->funciones_criticas      = Input::get('campo2');
				$analisiscomercial->experiencia_personal    = Input::get('campo3');
				$analisiscomercial->record_de_exito         = Input::get('campo4');
				$analisistecnico->save();


					
				return Response::json
                                    ([
										'success' => true,
										'message' => 'Success'
                                    ]);  
			}else{
				$analisiscomercial                          = new AnalisisComercial;
				$analisiscomercial->folio_proyecto          = Input::get('campo0');
				$analisiscomercial->caracteristicas_empresa = Input::get('campo1');
				$analisiscomercial->funciones_criticas      = Input::get('campo2');
				$analisiscomercial->experiencia_personal    = Input::get('campo3');
				$analisiscomercial->record_de_exito         = Input::get('campo4');
				$analisistecnico->save();

				return Redirect::to('proyectos/seccion/4')	
         			->with('message_exito', 'Sección 4');	
			}
		}else{
			if(Request::ajax())
			{
				
				return Response::json
                                    ([
										'success' => false,
										'errors'  => $validator ->getMessageBag()->toArray(),
										'message' => 'Revise los campos porfavor*'
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
