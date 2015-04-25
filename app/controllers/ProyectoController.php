<?php

class ProyectoController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function showIndex()
	{
		$id= Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		return View::make('proyectos/index',array('perfiles' => $perfiles));
	}


	protected function showCreate()
	{	
		$id= Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		return View::make('proyectos/create',array('perfiles' => $perfiles));
	}

	protected function postCreate()
	{
		return Redirect::to('proyectos/agregar/seccion/2')
                ->with('message_welcome', 'Se ha loggueado con exito')
                ->withInput();

	}

	protected function showCreate2()
	{
		$id= Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		return View::make('proyectos/create2',array('perfiles' => $perfiles));
	}

	protected function postCreate2()
	{
		return Redirect::to('proyectos/agregar/seccion/3')
                ->with('message', 'Se ha loggueado con exito')
                ->withInput();

	}

	protected function showCreate3()
	{
		$id= Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		return View::make('proyectos/create3',array('perfiles' => $perfiles));
	}
}
