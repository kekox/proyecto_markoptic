<?php

class PasswordController extends BaseController {


	public function showRemind()
 	{
    	return View::make('password/remind');
  	}

	public function postRemind()
	{

		$data=array(
            'email'=>Input::get('email'),
        );
		
		$rules=array(
            'email'=> 'required|email',
        );

		$messages=array(
			'required' => 'El correo electrónico es obligatorio.',
			'email'    => 'No es un correo válido'
		);
        $validator = Validator::make($data,$rules,$messages);

        if($validator->passes())
        {
        		$response = Password::remind(($data),function($message){
        			$message->subject('Recuperar Contraseña');
        		});

        		switch($response){
        			case Password::INVALID_USER:			
						return Redirect::back()->with('message_invalid','Ingrese un email válido');

					case Password::REMINDER_SENT:			 
						return Redirect::to('login')->with('message_remind', 'El correo ha sido enviado con éxito!');
        		}
        		
        }else{
        		return Redirect::to('password/reset')
        			->withErrors($validator)
                	->withInput()
                	->with('message_fail','Revise los campos porfavor.');
        }
	}

	public function showReset($token = null)
	{

		if (is_null($token)) App::abort(404);
  		return View::make('password/reset')
  				->with('token', $token);
	}

	public function postReset($token)
	{

	  $credentials = Input::only(
      'email', 'password', 'password_confirmation', 'token'
    	);

	  $rules=array(
			'email'                 => 'required|email',
			'password'              => 'required|min:6',
			'password_confirmation' => 'required|same:password',
        );


	  $messages=array(
			'required'   => 'El campo es obligatorio.',
			'min'        => 'El password debe contener al menos :min caracteres.',
			'same'		 => 'Las contraseñas deben coincidir.'
			);

	  $validator = Validator::make($credentials,$rules,$messages);

	  	if($validator->passes()){
			$response = Password::reset($credentials, function($user, $password)
		    	{
			      $user->password = Hash::make($password);
			      $user->save();
		    	});

			switch ($response)
		    	{
				case Password::INVALID_PASSWORD:
				case Password::INVALID_TOKEN:
				case Password::INVALID_USER:
			        return Redirect::back()
			        		->with('message_error', 'Ingrese el correo electrónico con el cual inicio el proceso.');
			        		//->with('error', Lang::get($response));

			    case Password::PASSWORD_RESET:
			        return Redirect::to('login')
			        		->with('message_exito','contraseña cambiada satisfactorimente');
		    	}
	  	}else{
	  		return View::make('password/reset')
	  				->with('token', $token)
	  				->withErrors($validator);
        			
                	
	  	}
	}

	public function getChange()
	{
		$perfiles = Perfil::ObtenerPerfil()->get();
		return View::make('password/change',array('perfiles' => $perfiles));
	}


	public function postChange()
	{
		$id   = Auth::user()->id;
		$user = User::find($id);

		
		$data=array(
			'password_anterior'     => Input::get('password_anterior'),
			'password'              => Input::get('password'),
			'password_confirmation' => Input::get('password_confirmation'),
			);

		$rules=array(
			'password_anterior'     => 'required',
			'password'              => 'required|min:6',
			'password_confirmation' => 'required|same:password',
			);

		$messages=array(
			'required'   => 'El campo es obligatorio.',
			'min'        => 'El password debe contener al menos :min caracteres.',
			'same'		 => 'Las contraseñas no coinciden.'
			);
	
		$validator = Validator::make($data,$rules,$messages);

		$comparepass = Input::get('password_anterior');

		if(Hash::check($comparepass,$user->password)){
			if($validator->passes()){

				$password       = Input::get('password');
				$user->password = Hash::make($password);
				$user->save();

				return Redirect::to('dashboard')
         			->with('message_contrasena', 'Contraseña Cambiada satisfactoriamente.');

			}else{
				$perfiles = Perfil::ObtenerPerfil()->get();

				return Redirect::to('password/change')
					->with('message_fail', 'Las contraseñas deben coincidir.')
					->withErrors($validator)
					->withInput();
			}
			
		}else{
			
			return Redirect::to('password/change')
                ->with('message_fail', 'Ingrese su actual contraseña.')
                ->withErrors($validator)
                ->withInput();
		}	
	}
	
}
