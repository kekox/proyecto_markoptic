<?php
class CmsController extends Controller 
{
    public function getIndex()
    {
        $users = User::all();
        $id= Auth::user()->id_perfil;
        $myid= Auth::user()->id;
        if($id==3)
        {
            $perfiles = Perfil::where('id_perfil','=',$id)->get();
            $users = User::where('id','<>',$myid)->get();
            return View::make('cms/index',array('perfiles' => $perfiles,'users'=>$users));
        }
        else{
            return Redirect::to('dashboard')->with('message','Lo sentimos, acceso restringido');
            
            
        }
    }
    public function postStore()
    {
        $data=array(
            'nombre'=>Input::get('nombre'),
            'apellido_paterno'=>Input::get('apellido_paterno'),
            'apellido_materno'=>Input::get('apellido_materno'),
            'email'=>Input::get('email'),
            'perfil'=>Input::get('perfil'),
            'password'=>Input::get('password')
        );
        $rules=array(
            'nombre' => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3',
            'apellido_paterno' =>'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'apellido_materno' =>'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'email' => 'required|min:2|email|unique:users',
            'perfil' => 'required',
            'password' => 'required|min:6' 
        );
        
        $validator = Validator::make($data, $rules);
        if(Request::ajax())
        {
            if ($validator->passes()) {
                $user = new User;
                $user->nombre = Input::get('nombre');
                $user->apellido_Paterno = Input::get('apellido_paterno');
                $user->apellido_Materno = Input::get('apellido_materno');
                $user->email = Input::get('email');
                $user->id_perfil = Input::get('perfil');
                $user->password =  Hash::make(Input::get('password'));
                $user->save();
               /* Mail::send('emails.welcome', array('nombre'=>Input::get('nombre')), function($message){
                    $message->to(Input::get('email'), Input::get('nombre'));
                    $message->subject('Registro con Éxito');    
                 });*/
             return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'Se ha creado satisfactoriamente'
                                    ]);
             }
             else{
                return Response::json
                                    ([
                                        'success' => false,
                                        'errors' => $validator ->getMessageBag()->toArray()
                                    ]);
             }
         }     
    }
    public function getDelete($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return Redirect::to('cms')
            ->with('message_delete','Usuario Eliminado Correctamente');
    }
    public function postData($user_id)
    {
  
        $user = User::find($user_id);

        $data=Array(
            'success'=> true,
            'id'=>$user->id,
            'nombre'=>$user->nombre,
            'apellido_Paterno'=>$user->apellido_Paterno,
            'apellido_Materno'=>$user->apellido_Materno,
            'email'=>$user->email,
            'id_perfil'=>$user->id_perfil,
        );
        return Response::json($data);
    }
    
    public function postUpdate()
    {
        $user_id = Input::get('user_id');
        $user = User::find($user_id);
        $data=array(
            'nombre'=>Input::get('nombre_edit'),
            'apellido_paterno'=>Input::get('apellido_paterno_edit'),
            'apellido_materno'=>Input::get('apellido_materno_edit'),
            'email'=>Input::get('email_edit'),
            'perfil'=>Input::get('perfil_edit'),
           
        );
        $rules=array(
            'nombre' => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3',
            'apellido_paterno' =>'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'apellido_materno' =>'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'email' => 'required|min:2|email',
            'perfil' => 'required',
        );
        
        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
        $user->nombre= Input::get('nombre_edit');
        $user->apellido_Paterno= Input::get('apellido_paterno_edit');
        $user->apellido_Materno= Input::get('apellido_materno_edit');
        $user->email = Input::get('email_edit');
        $user->id_perfil = Input::get('perfil_edit');
        $user->save();
            return Redirect::to('cms')
                ->with('message_edit','Usuario Editado Correctamente');
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
    public function postUpdatePerfil()
    {
        $user_id = Input::get('user_id');
        $user = User::find($user_id);
        $data=array(
            'nombre'=>Input::get('nombre_edit'),
            'apellido_paterno'=>Input::get('apellido_paterno_edit'),
            'apellido_materno'=>Input::get('apellido_materno_edit'),
            'email'=>Input::get('email_edit'),
            
           
        );
        $rules=array(
            'nombre' => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3',
            'apellido_paterno' =>'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'apellido_materno' =>'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:25',
            'email' => 'required|min:2|email',
           
        );
        
        $validator = Validator::make($data, $rules);
        if ($validator->passes()) {
        $user->nombre= Input::get('nombre_edit');
        $user->apellido_Paterno= Input::get('apellido_paterno_edit');
        $user->apellido_Materno= Input::get('apellido_materno_edit');
        $user->email = Input::get('email_edit');
        
        $user->save();
            return Redirect::back()
                ->with('message_edit','Usuario Editado Correctamente');
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