<?php

class MercadoController extends Controller {

	

	public function create(){	
		$id= Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();

		$proyectos = Proyecto::orderBy('created_at','desc')->take(1)->get();
		return View::make('mercado/create',array('perfiles' => $perfiles,'proyectos'=>$proyectos));
	}

	public function store(){
	
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
