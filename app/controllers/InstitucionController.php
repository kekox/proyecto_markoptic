<?php

class InstitucionController extends Controller {

	

	public function create(){	
		$id= Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		$idselected = Auth::user()->id;

		$proyectos = Proyecto::orderBy('created_at','desc')->where('id_user','=',$idselected)->take(1)->get();
		return View::make('institucion/create',array('perfiles' => $perfiles,'proyectos'=>$proyectos));
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
