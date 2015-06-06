<?php

class ContactoController extends Controller {

	protected function showContacto(){
		$perfiles = Perfil::ObtenerPerfil()->get();
		return View::make('contacto/contacto',array('perfiles' => $perfiles));
	}


	public function postContacto()
	{
		
		
		$data= array(
			'name'    => Input::get('name'),
			'correo'  => Input::get('correo'),
			'subject' => Input::get('subject'),
			'msg'     => Input::get('msg'),
			);

		$rules=array(
			'name'    => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:50',
			'correo'  => 'required|email',
			'subject' => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:255',
			'msg'     => 'required|min:5|max:255',
	        );

		$messages=([
			'name.required'    => 'El campo nombre es obligatorio.',
			'name.regex'       => 'El formato del nombre es inválido',
			'name.min'         => 'El nombre debe contener al menos 3 caracteres.',
			'subject.required' => 'El campo asunto es obligatorio.',
			'subject.regex'    => 'El formato del asunto es inválido',
			'subject.min'      => 'El asunto debe contener al menos 3 caracteres.',
			'msg.required'     => 'El campo mensaje es obligatorio.',
			'msg.regex'        => 'El formato del mensaje es inválido',
			'msg.min'          => 'El mensaje debe contener entre 5 hasta 500 caracteres.',
			
		]);


        $validator = Validator::make($data, $rules,$messages);
        if(Request::ajax())
	    {
	        if ($validator->passes()) 
	        {
				$toEmail   ='keko_daniel@hotmail.com';
				$toName    ='Administrador';
				$fromEmail =Input::get('correo');
				$fromName  =Input::get('name');

		            Mail::send('emails.contacto',$data,function($message) use($toEmail,$toName,$fromName,$fromEmail)
		            {
						$message->to($toEmail,$toName);
						$message->from($fromEmail,$fromName);
						$message->subject('Nuevo email de un usuario');
		            });
		            
		           		return Response::json
			        			([
			        				'success' => true,
			        				'message' => 'Se ha enviado correctamente'
			        			]);
	            	
	            	
	        }
	        else
	        {	
	        		
	        			return Response::json
			        			([
									'success' => false,
									'errors'  => $validator ->getMessageBag()->toArray(),
									'message' => 'Revise los campos porfavor.'
			        			]);
			       
	        }
	   
	     }    
         	
		
		
	}//Termina la function postController

}//Llave que termina la clase
