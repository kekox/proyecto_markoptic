<?php

class ContactoController extends Controller {

	protected function showContacto(){
		return View::make('contacto/contacto');
	}


	public function postContacto()
	{
		$mensaje =null;
		
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

        if ($validator->passes()) {
        	$toEmail='keko_daniel@hotmail.com';
        	$toName='Administrador';
        	$fromEmail= Input::get('email');
			$fromName=Input::get('name');
	            Mail::send('emails.contacto',$data,function($message) use($toName,$toEmail,$fromName,$fromEmail)
	            {
	            	$message->to($toEmail,$toName);
	            	$message->from($fromEmail,$fromName);
	            	$message->subject('Nuevo email de un usuario');
	            });

            	
            	return Redirect::to('contacto')
            		->with('message_exito', ' Mensaje enviado con éxito');
         	}

         	return Redirect::to('contacto')
                ->with('message_alert', ' Favor de llenar los campos correctamente*')
                ->withErrors($validator)
                ->withInput();
		
		
	}
}
