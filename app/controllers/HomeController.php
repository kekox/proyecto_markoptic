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
            return Redirect::to('dashboard');
        }
        // Show the login page
        return View::make('users/login');
	}

	public function showWelcome()
	{
		$perfiles = Perfil::ObtenerPerfil()->get();
		return View::make('bienvenida',array('perfiles' => $perfiles));
	}

	public function showDashboard()
	{
		$perfiles = Perfil::ObtenerPerfil()->get();
		return View::make('dashboard',array('perfiles' => $perfiles));
	}


	public function showProyectos()
	{
		$perfiles = Perfil::ObtenerPerfil()->get();

		if(isset($_GET['buscar'])){
			$buscar = Input::get("buscar");
			$proyectos = Proyecto::where('folio','LIKE','%'.$buscar.'%')
				->orwhere('nombre_proyecto','LIKE','%'.$buscar.'%')
				->Paginate(6);

		}else{
			$proyectos = Proyecto::orderBy('created_at')
				->simplePaginate(15);
		}

		return View::make('proyectos/index',array('perfiles' => $perfiles,'proyectos' => $proyectos));
	}


	public function showProyectoslist(){
		$id       = Auth::user()->perfil_id;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		$proyectos = Proyecto::all();

		return View::make('proyectos/indexlist',array('perfiles' => $perfiles,'proyectos'=>$proyectos));
	}
	
}
