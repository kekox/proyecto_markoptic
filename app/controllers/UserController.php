<?php

class UserController extends BaseController{


     public function showLogin()
    {     
       
        return View::make('users/login');
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
                ->with('message_welcome', ' Bienvenidos al sistema de integración de proyectos ');
                
            }
            else
            {
                return Redirect::to('login')
                ->with('message_incorrect', ' Your email/password was incorrect.')
                ->withErrors($validator)
                ->withInput();
                
            }
        }

        // Something went wrong.
        return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
               
                
        
    }
    public function showCreate() {
        return View::make('users/create');
    }

    public function postCreate(){

        $data=array(
            'nombre'=>Input::get('nombre'),
            'email'=>Input::get('email'),
            'password'=>Input::get('password')
        );

        $rules=array(
            'nombre' => 'required|min:3|alpha',
            'email' => 'required|min:2|email|unique:users',
            'password' => 'required|min:6' 
        );

        $mensajes = array ('password.regex' => 'El formato de el :attribute no es correcto, debe de tener entre 8 y 10 caracteres, por lo menos un digito y un alfanumérico, y no puede contener caracteres espaciales');


        $validator = Validator::make($data, $rules);

        if ($validator->passes()) {
            $user = new User;
            $user->nombre = Input::get('nombre');
            $user->email = Input::get('email');
            $user->password =  Hash::make(Input::get('password'));
            $user->save();

         return Redirect::to('login')
         ->with('message_exito', 'Thank you for creating a new account. Please sign in.');
         }

        return Redirect::to('create')
                ->with('message_fail', ' Verifique sus datos.')
                ->withErrors($validator)
                ->withInput();

        
    }

    public function getLogout()
    {
        // Log out
        Auth::logout();

        // Redirect to homepage
        return Redirect::to('login')
                ->with('info', 'Haz cerrado sesion');
    }


   


}
