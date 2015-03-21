<?php

class ContactoController extends Controller {

	protected function showContacto(){
		$id= Auth::user()->id_perfil;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		return View::make('contacto/contacto',array('perfiles' => $perfiles));
	}


	public function postContacto()
	{
		
		
		$data= array(
			'name' => Input::get('name'),
			'email' => Input::get('email'),
			'subject' => Input::get('subject'),
			'msg' => Input::get('msg'),
			);

		$rules=array(
			'name' => 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:30',
	        'email'=> 'required|email|between:3,50',
	        'subject'=> 'required|regex:/^[\sa-zA-ZñÑáéíóúÁÉÍÓÚ-]+$/|min:3|max:80',
	        'msg'=> 'required|between:5,500',
	        );


        $validator = Validator::make($data, $rules);
        if(Request::ajax())
	    			{
	        if ($validator->passes()) 
	        {
	        	$toEmail='keko_daniel@hotmail.com';
	        	$toName='Administrador';
	        	$fromEmail=Input::get('email');
				$fromName=Input::get('name');

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
			        				'errors' => $validator ->getMessageBag()->toArray()
			        			]);
			       
	        }
	   
	     }    
         	
		
		
	}//Termina la function postController

}//Llave que termina la clase
