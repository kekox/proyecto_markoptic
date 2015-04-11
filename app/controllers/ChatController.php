<?php

class ChatController extends Controller {

	
	public function showChat()
	{
		$id= Auth::user()->id_perfil;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		//$status = HipSupport::isOnline();
		//return View::make('chat/chat',array('perfiles' => $perfiles,'status'=>$status));
		return View::make('chat/chat',array('perfiles' => $perfiles));
	}

	public function postChat(){
		
	    if ($validator->fails()) {
	        // Redirect with Errors or send Errors via JSON Response... 
	    }   

	    $room = HipSupport::init([
	    	
	        'room_name' => 'Markoptic ' . Input::get('name'),
	        'notification' => [
	            'message' => Input::get('name') . ' would like to chat.'
	        ]
	    ]);

	    // Save the name and $room->room_id into the database.
	    if ($room) {
	        if (Request::ajax()) {
	            return Response::json(['url' => $room->hipsupport_url]);
	        }
	        return Redirect::to($room->hipsupport_url);
	    }
	}

}


