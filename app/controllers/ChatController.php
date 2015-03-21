<?php

class ChatController extends Controller {

	
	protected function showChat()
	{
		$id= Auth::user()->id_perfil;
		$perfiles = Perfil::where('id_perfil','=',$id)->get();
		return View::make('chat/chat',array('perfiles' => $perfiles));
	}

}
