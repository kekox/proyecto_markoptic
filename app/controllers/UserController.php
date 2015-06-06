<?php
class UserController extends BaseController{

     public function getLogin()
    {     
        
        if (Auth::check())
        {
            return Redirect::to('dashboard');
        }
        
        return View::make('users.login');
        
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
                    return Response::json

                                    ([
                                        'success' => false,
                                        'message' => 'Email/password are incorrect'
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

    public function getCreate() {
        return View::make('users/create');
    }

    public function postCreate(){
        $data=array(
            'nombre'=>Input::get('nombre'),
            'apellidoP'=>Input::get('apellidoP'),
            'apellidoM'=>Input::get('apellidoM'),
            'email'=>Input::get('email'),
            'perfil'=>Input::get('perfil'),
            'password'=>Input::get('password')

        );
        $rules=array(
            'nombre' => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3',
            'apellidoP' =>'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'apellidoM' =>'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'email' => 'required|min:2|email|unique:users',
            'perfil' => 'required',
            'password' => 'required|min:6' 
        );
        
        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            $user = new User;
            $user->nombre = Input::get('nombre');
            $user->apellido_Paterno = Input::get('apellidoP');
            $user->apellido_Materno = Input::get('apellidoM');
            $user->email = Input::get('email');
            $user->perfil_id = Input::get('perfil');
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

     public function postLogout()
    {
        // Log out
        Auth::logout();
        // Redirect to homepage
        return Redirect::to('login')
                ->with('info', 'Haz cerrado sesion');
    }
   
}