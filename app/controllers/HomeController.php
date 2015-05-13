<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function showLogin()
	{
		// Check if we already logged in
        if (Auth::check())
        {
            // Redirect to homepage
            return Redirect::to('bienvenida');
        }
        // Show the login page
        return View::make('users/login');
	}

	public function showWelcome()
	{
		$id       = Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		return View::make('bienvenida',array('perfiles' => $perfiles));
	}

	protected function showDashboard()
	{
		$id       = Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		return View::make('dashboard',array('perfiles' => $perfiles));

	
	}

	protected function showDashboardProyectos()
	{
		$id       = Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		return View::make('proyectos/index',array('perfiles' => $perfiles));
	}


	
}
