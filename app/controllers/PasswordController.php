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

        $validator = Validator::make($data,$rules);

        if($validator->passes())
        {
        		$response = Password::remind(($data),function($message){
        			$message->subject('Recuperar Contraseña');
        		});

        		switch($response){
        			case Password::INVALID_USER:			
						return Redirect::back()->with('message','Ingrese un email válido');

					case Password::REMINDER_SENT:			 
						return Redirect::to('login')->with('message_remind', 'El correo ha sido enviado con éxito!');
        		}
        		
        }else{
        		return Redirect::to('password/reset')
        			->withErrors($validator)
                	->withInput();
        }
 
  		
	}

	public function showReset($token = null)
	{
		if (is_null($token)) App::abort(404);
  		return View::make('password/reset')->with('token', $token);
	}

	public function postReset($token)
	{

	  $credentials = Input::only(
      'email', 'password', 'password_confirmation', 'token'
    	);
	  $rules=array(
            'email'=> 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'same:password',
        );

	  	$validator = Validator::make($credentials,$rules);

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
			        return Redirect::back()->with('error', Lang::get($response));

			    case Password::PASSWORD_RESET:
			        return Redirect::to('login');
		    	}
	  	}else{
	  		return View::make('password/reset')->with('token', $token)->withErrors($validator);
        			
                	
	  	}
	 
	   

	}

	public function getChange(){
		$id= Auth::user()->id_perfil;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		return View::make('password/change',array('perfiles' => $perfiles));
	}


	public function postChange(){

	}
	
}
