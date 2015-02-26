<?php

class ProyectoController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function showIndex()
	{
		return View::make('proyectos/index');
	}


	protected function showCreate()
	{
		return View::make('proyectos/create');
	}

	protected function postCreate()
	{
		return Redirect::to('proyectos/agregar/seccion2')
                ->with('message_welcome', 'Se ha loggueado con exito')
                ->withInput();

	}

	protected function showCreate2()
	{
		return View::make('proyectos/create2');
	}

	protected function postCreate2()
	{
		return Redirect::to('proyectos/agregar/seccion3')
                ->with('message', 'Se ha loggueado con exito')
                ->withInput();

	}

	protected function showCreate3()
	{
		return View::make('proyectos/create3');
	}
}
