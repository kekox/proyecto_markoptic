<?php

class AdminController extends BaseController {

	public function showLogin()
	{
		return View::make('auth/login');
	}

	public function postLogin()
	{
		$data=array(
			'email'=>Input::get('email'),
			'password'=>Input::get('password'),
		);

		$rules=array(
			'email'=> 'required|email',
			'password'=> 'required'
		);

		$validator = Validator::make($data,$rules);


		if ($validator->passes())
        {
            // Try to log the user in.
            if (Auth::attempt($data))
            {
                return Redirect::to('dashboard')
                ->with('message', 'Se ha loggueado con exito')
                ->withInput();
            }
            else
            {
                return Redirect::to('login')
                ->with('message', 'Your email/password was incorrect.')
                ->withErrors($validator)
                ->withInput();
                
            }
        }

        // Something went wrong.
        return Redirect::to('login')
        		->withErrors($validator)
        		->withInput(Input::except('password'));

		
	}

	public function showCreate()
	{
		return View::make('auth/create');
	}

	public function postCreate(){

		$data=array(
			'nombre'=>Input::get('nombre'),
			'email'=>Input::get('email'),
			'password'=>Input::get('password')
		);

		$rules=array(
			'nombre' => 'required|min:3|alpha',
		    'email' => 'required|min:2|email|unique:admins',
		    'password' => 'required' 
		);

		$validator = Validator::make($data, $rules);

        if ($validator->passes()) {
            $admin = new Admin;
            $admin->nombre = Input::get('nombre');
            $admin->email = Input::get('email');
            $admin->password =  Hash::make(Input::get('password'));
            $admin->save();

         return Redirect::to('login')
         ->with('message', 'Thank you for creating a new account. Please sign in.');
         }

        return Redirect::to('create')
                ->with('message', 'Something went wrong.')
                ->withErrors($validator)
                ->withInput();
    
	}

	public function getLogout()
    {
        // Log out
        Auth::logout();

        // Redirect to homepage
        return Redirect::to('login')->with('info', 'Haz cerrado sesion');
    }

	


}
