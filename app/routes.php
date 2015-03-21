<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Pagina Bienvenida y Login*/
Route::get('/',array('uses' => 'HomeController@showLogin'));

/*Route::controller('account','UserController');*/

/*login*/
Route::get ('login' , array('uses' => 'UserController@getLogin'));
Route::post('login' , array('before' => 'csrf','uses' => 'UserController@postLogin','as'=>'account.login'));
Route::get ('create', array('uses' => 'UserController@getCreate'));
Route::post('create', array('before' => 'csrf','uses' => 'UserController@postCreate','as'=>'account.create'));
Route::get ('logout',  array('uses' => 'UserController@getLogout','as'=>'account.logout'));



/*Reset Password*/
Route::get('password/reset',array('uses' => 'PasswordController@showRemind'));
Route::post('password/reset',array('uses' => 'PasswordController@postRemind','as'=>'account.reset'));
Route::get('password/reset/{token}', array('uses' => 'PasswordController@showReset'));
Route::post('password/reset/{token}', array('uses' => 'PasswordController@postReset','as'=>'password.update'));

/* Redirecciona a una pagina de error personalizada y ofrece la opcion de ir a inicio o regresar*/
App::missing(function($excepcion)
{
	return Response::view('error.error404',array(),404);
});


/*Filtro para no permirtir a estas paginas sin estar loggiado  */
Route::group(array('before' => 'auth'), function()
{

	/*Pagina Bienvenida*/
    Route::get('bienvenida', array('uses' => 'HomeController@showWelcome'));
	
	/*Pagina Home*/
    Route::get('dashboard', array('uses' => 'HomeController@showDashboard'));

    /*update perfil*/
    Route::post('updateperfil',array('uses'=>'CmsController@postUpdatePerfil','as'=>'user.update.perfil'));
    Route::get('password/change',array('uses'=>'PasswordController@getChange','as'=>'password.change'));


    /*seccion proyectos*/
    Route::get('proyectos', array('uses' => 'ProyectoController@showIndex'));
    	/*prefijo para */
		Route::group(array('prefix' => 'proyectos/agregar/seccion'),function()
		{
			Route::get('/1',array('uses' => 'ProyectoController@showCreate'));
			Route::post('/1',array('uses' => 'ProyectoController@postCreate','as'=>'addseccion1' ));
			Route::get('/2',array('uses' => 'ProyectoController@showCreate2'));
			Route::post('/2',array('uses' => 'ProyectoController@postCreate2','as'=>'addseccion2'));
			Route::get('/3',array('uses' => 'ProyectoController@showCreate3'));
			Route::post('/3',array('uses' => 'ProyectoController@postCreate3','as'=>'addseccion3'));
		});
	


	/*Seccion CMS*/
	Route::get('cms',array('uses' => 'CmsController@getIndex'));
	Route::post('cms',array('uses' => 'CmsController@postStore','as'=>'user.store'));
	Route::get('cms/delete/{id}',array('uses' => 'CmsController@getDelete','as'=>'user.delete'));
	Route::post('cms/edit/{id}',array('uses' => 'CmsController@postData','as'=>'user.data'));
	Route::post('cms/update',array('uses'=>'CmsController@postUpdate','as'=>'user.update'));



	/*Seccion del chat */
	Route::get('chat',array('uses' => 'ChatController@showChat'));

	/*Seccion de dudas y sugerencias */
	Route::get('contacto',array('uses' => 'ContactoController@showContacto'));
	Route::post('contacto',array('uses' => 'ContactoController@postContacto', 'as' =>'contacto.sent'));

	
	

});




/*para insertar un usuario*/
Route::get('insertar',function(){

	$usuario = new User;

	$usuario->nombre = "keko";
	$usuario->correo = "keko_daniel@hotmail.com";
	$usuario->password = "keko1234";

	$usuario->save();

	return "El usuario prueba ha sido salvado en la base de datos";
});