<?php
class AuthController extends BaseController{

     public function index()
    {     
        // Check if we already logged in
        if (Auth::check())
        {
            // Redirect to homepage
            return Redirect::to('bienvenida');
        }
        // Show the login page
        return View::make('users.login');
        
    }


    public function postLogin()
    {

        $data=array(
            'email'    =>Input::get('email'),
            'password' =>Input::get('password')            
        );

        $remember = (Input::has('remember')) ? true : false;

        $rules=array(
            'email'    => 'required|email',
            'password' => 'required|min:6'
        );

        $messages=array(
            'email.required'    => 'El correo electrónico es obligatorio.',
            'email.email'       => 'Ingrese un correo electrónico válido.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min'      => 'La contraseña debe contener mínimo 6 caracteres.'
        );

        $validator = Validator::make($data,$rules,$messages);

         
            if ($validator->passes()){ 

                if(Request::ajax())
                {
                        if (Auth::attempt($data,$remember))
                        {
                            return Response::json
                                            ([
                                                'success' => true,
                                                'message' => 'Bienvenido al Sistema.'
                                            ]);
                            
                        }else{
                            return Response::json

                                            ([
                                                'success' => false,
                                                'errors'  => $validator ->getMessageBag()->toArray(),
                                                'message' => 'El correo eléctronico/contraseña son incorrectos.'
                                            ]);          
                        }

                
                }

            }else{
                if(Request::ajax())
                {
                    return Response::json
                                    ([
                                        'success' => false,
                                        'errors'  => $validator ->getMessageBag()->toArray(),
                                        'message' => 'Revise los campos porfavor.'

                                    ]);
                } 
            }
        
    }

    public function create() {
        return View::make('users/create');
    }

    public function store(){
        $data=array(
            'nombre'    =>Input::get('nombre'),
            'apellidoP' =>Input::get('apellidoP'),
            'apellidoM' =>Input::get('apellidoM'),
            'email'     =>Input::get('email'),
            'perfil'    =>Input::get('perfil'),
            'password'  =>Input::get('password')

        );
        $rules=array(
            'nombre'    => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3',
            'apellidoP' =>'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'apellidoM' =>'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'email'     => 'required|min:2|email|unique:users',
            'perfil'    => 'required',
            'password'  => 'required|min:6' 
        );
        
        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            $user                   = new User;
            $user->nombre           = Input::get('nombre');
            $user->apellido_Paterno = Input::get('apellidoP');
            $user->apellido_Materno = Input::get('apellidoM');
            $user->email            = Input::get('email');
            $user->perfil_id        = Input::get('perfil');
            $user->password         =  Hash::make(Input::get('password'));
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