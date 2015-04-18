<?php

class ChatController extends Controller {

	
	public function showChat()
	{
		$id= Auth::user()->id_perfil;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		$status = HipSupport::isOnline();
		//$status = HipSupport::isOnline();
		//return View::make('chat/chat',array('perfiles' => $perfiles,'status'=>$status));
		return View::make('chat/chat',array('perfiles' => $perfiles,'status'=>$status));
	}

	public function postChat(){
		$nombre= input::get('name');
		$validator = Validator::make(Input::all(), ['name' => 'required|min:3']);

	    if ($validator->passes()) {

	       		 $room = HipSupport::init([
	    	
			        'room_name' => 'Live Chat With' . Input::get('name'),
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
	    }else{
	    	return Redirect::to('chat')
                ->withErrors($validator)
                ->withInput();
	    }   

	    
	}

}


