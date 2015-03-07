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
Route::get('/',array('uses' => 'UserController@showLogin'));



/*login*/
Route::get ('login' , array('uses' => 'UserController@showLogin'));
Route::post('login' , array('before' => 'csrf','uses' => 'UserController@postLogin'));
Route::get ('create', array('uses' => 'UserController@showCreate'));
Route::post('create', array('before' => 'csrf','uses' => 'UserController@postCreate'));
Route::get ('logout',  array('uses' => 'UserController@getLogout'));

/*Reset Password*/
Route::get('account/reset',array('uses' => 'PasswordController@showRemind'));
Route::post('account/reset',array('uses' => 'PasswordController@postRemind'));
Route::get('account/reset/{token}', array('uses' => 'PasswordController@showReset','as'=>'account.reset'));
Route::post('account/reset/{token}', array('uses' => 'PasswordController@postReset','as'=>'account.update'));

/* Redireccionar a la raiz en caso de que se accede a una pagina que no existe*/
App::missing(function($excepcion)
{
	return Response::view('error.error404',array(),404);
});


Route::group(array('before' => 'auth'), function()
{

	/*Pagina Bienvenida*/
    Route::get('bienvenida', array('uses' => 'HomeController@showWelcome'));
	
	/*Pagina Home*/
    Route::get('dashboard', array('uses' => 'HomeController@showDashboard'));


    /*seccion proyectos*/
	Route::get('proyectos', array('uses' => 'ProyectoController@showIndex'));
	Route::get('proyectos/agregar/seccion1',array('uses' => 'ProyectoController@showCreate'));
	Route::post('proyectos/agregar',array('uses' => 'ProyectoController@postCreate'));
	Route::get('proyectos/agregar/seccion2',array('uses' => 'ProyectoController@showCreate2'));
	Route::post('proyectos/agregar2',array('uses' => 'ProyectoController@postCreate2'));
	Route::get('proyectos/agregar/seccion3',array('uses' => 'ProyectoController@showCreate3'));
	Route::post('proyectos/agregar3',array('uses' => 'ProyectoController@postCreate3'));


	/*Seccion CMS*/
	Route::get('cms',array('uses' => 'CmsController@showIndex'));


	/*Seccion del chat */
	Route::get('chat',array('uses' => 'ChatController@showChat'));

	/*Seccion de dudas y sugerencias */
	Route::get('contacto',array('uses' => 'ContactoController@showContacto'));
	Route::post('contacto',array('uses' => 'ContactoController@postContacto'));
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