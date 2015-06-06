<?php

class ChatController extends Controller {

	
	public function showChat()
	{
		$perfiles = Perfil::ObtenerPerfil()->get();
		$status = HipSupport::isOnline();
		return View::make('chat/chat',array('perfiles' => $perfiles,'status'=>$status));
	}

	public function postChat(){
		$nombre= input::get('name');

		$data=([
			'name' => input::get('name'),
			]);

		$rules=([
			'name' => 'required|min:3',
			]);

		$messages=([
			'required' => 'El nombre es obligatorio',
			'min'        => 'El nomber debe contener al menos :min caracteres.',
			]);

		$validator = Validator::make($data,$rules,$messages);

	    if ($validator->passes()) {

	       		 $room = HipSupport::init([
						'room_name' => Input::get('name').' Chat'." ". '['.date('d-m-Y').']',
						'notification' => [
						'message' => Input::get('name') . ' Te esta enviando mensaje'
			        ]
			    ]);

			    // Save the name and $room->room_id into the database.
			    if ($room) {
			        if (Request::ajax()) {
			            return Response::json(['url' => $room->hipsupport_url]);
			        }
			        	return Redirect::to($room->hipsupport_url);
			    } 
	    }else{
	    	return Redirect::to('chat')
                ->withErrors($validator)
                ->withInput();
	    }   

	    
	}

}


