<?php

class MercadoController extends Controller {

	

	public function create(){	
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = Proyecto::ObtenerProyecto()->take(1)->get();
		return View::make('mercado/create',array('perfiles' => $perfiles,'proyectos'=>$proyectos));

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
			'campo10' => Input::get('campo10'),
			);

		$rules=array(
			'campo0'  => 'required|numeric|min:1|max:100000|unique:mercados,folio_proyecto',
			'campo1'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo2'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo3'  => 'required|regex:/^[\sa-z0-9 A-Z .-]+$/|min:1',
			'campo4'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo5'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo6'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo7'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo8'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo9'  => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
			'campo10' => 'required|regex:/^[\sa-z0-9 A-Z ñ.-_,()ÑáéíóúÁÉÍÓÚ-]+$/|min:2',
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
				$mercado                       = new Mercado;
				$mercado->folio_proyecto       = Input::get('campo0');
				$mercado->mercado              = Input::get('campo1');
				$mercado->modelo_de_negocio    = Input::get('campo2');
				$mercado->precio               = Input::get('campo3');
				$mercado->proyecciones         = Input::get('campo4');
				$mercado->enfoque_de_insercion = Input::get('campo5');
				$mercado->cliente_objetivo     = Input::get('campo6');
				$mercado->beneficios           = Input::get('campo7');
				$mercado->competencia          = Input::get('campo8');
				$mercado->patentes_similares   = Input::get('campo9');
				$mercado->barreras             = Input::get('campo10');
				$mercado->save();

				

				return Response::json
	                                    ([
	                                        'success' => true,
	                                        'message' => 'El registro de esta sección fue todo un éxito'
	                                    ]);  
			}else{
				/*$mercado                       = new Mercado;
				$mercado->folio_proyecto       = Input::get('campo0');
				$mercado->mercado              = Input::get('campo1');
				$mercado->modelo_de_negocio    = Input::get('campo2');
				$mercado->precio               = Input::get('campo3');
				$mercado->proyecciones         = Input::get('campo4');
				$mercado->enfoque_de_insercion = Input::get('campo5');
				$mercado->cliente_objetivo     = Input::get('campo6');
				$mercado->beneficios           = Input::get('campo7');
				$mercado->competencia          = Input::get('campo8');
				$mercado->patentes_similares   = Input::get('campo9');
				$mercado->barreras             = Input::get('campo10');
				$mercado->save();}*/
			
				return Redirect::to('proyectos/seccion/7')	
	         			->with('message_exito', 'Sección 7');	
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
										'success'    => false,
										'errors'     => $validator ->getMessageBag()->toArray(),
										'message'    => 'Revise los campos porfavor.',
										'validation' => 'El campo debe ser numérico',
										'expression' => 'ya ha sido registrado'
                                    ]);
			 }else{

			 	return Redirect::to('proyectos/seccion/6')
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
