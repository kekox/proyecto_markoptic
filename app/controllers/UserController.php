<?php
class UserController extends BaseController{
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
    public function postLogin()
    {

        $data=array(
            'email'=>Input::get('email'),
            'password'=>Input::get('password'),
        );
        $remember = (Input::has('remember')) ? true : false;

        $rules=array(
            'email'=> 'required|email',
            'password'=> 'required'
        );

        $validator = Validator::make($data,$rules);

         if(Request::ajax())
        {
            if ($validator->passes())
            {
                // Try to log the user in.
               
                if (Auth::attempt($data,$remember))
                {
                    return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'Te has loggeado correctamente'
                                    ]);
                    
                }
                else
                {
                    $msg = "Email/password are incorrect";
                    return Response::json

                                    ([
                                        'success' => false,
                                        'errors' => $msg
                                    ]);          
                }
            }
            else
            {
                    return Response::json
                                    ([
                                        'success' => false,
                                        'errors' => $validator ->getMessageBag()->toArray()

                                    ]);
            }
        }
           
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
        
        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            $user = new User;
            $user->nombre = Input::get('nombre');
            $user->email = Input::get('email');
            $user->password =  Hash::make(Input::get('password'));
            $user->save();

            Mail::send('emails.welcome', array('nombre'=>Input::get('nombre')), function($message){
                $message->to(Input::get('email'), Input::get('nombre'));
                $message->subject('Gracias por registrarse');    
             });

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