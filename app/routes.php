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

Route::get('formtest',function(){
	return View::make('formtest');
});

Route::get('test',function(){
	return View::make('test');
});

Route::get('test2',function(){
	return View::make('test2');
});

/*Route::controller('account','UserController');*/

/*login*/
Route::get ('login' , array('uses' => 'AuthController@index'));
Route::post('login' , array('before' => 'csrf','uses' => 'AuthController@postLogin','as'=>'account.login'));
Route::get ('create', array('uses' => 'AuthController@create'));
Route::post('create', array('before' => 'csrf','uses' => 'AuthController@store','as'=>'account.create'));
Route::get ('logout',  array('uses' => 'AuthController@getLogout','as'=>'account.logout'));



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
    Route::post('password/change',array('uses'=>'PasswordCOntroller@postChange','as'=>'password.change.post'));


    /*seccion proyectos*/
    Route::get('proyectos', array('uses' => 'HomeController@showDashboardProyectos'));
    	/*prefijo para */
		Route::group(array('prefix' => 'proyectos/seccion/'),function()
		{
			Route::get('1',array('uses' => 'ProyectoController@create'));
			Route::post('1',array('uses' => 'ProyectoController@store','as'=>'addseccion1' ));

			Route::get('2',array('uses' => 'DescripcionController@create'));
			Route::post('2',array('uses' => 'DescripcionController@store','as'=>'addseccion2'));

			Route::get('3',array('uses' => 'AnalisisTecnicoController@create'));
			Route::post('3',array('uses' => 'AnalisisTecnicoController@store','as'=>'addseccion3'));
			
			Route::get('4',array('uses' => 'AnalisisComercialController@create'));
			Route::post('4',array('uses' => 'AnalisisComercialController@store', 'as' => 'addseccion4'));
		});
	


	/*Seccion CMS*/
	Route::get('cms',array('uses' => 'CmsController@index'));
	Route::post('cms',array('uses' => 'CmsController@store','as'=>'user.store'));
	Route::post('cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('cms/update',array('uses'=>'CmsController@update','as'=>'user.update'));
	Route::get('cms/delete/{id}',array('uses' => 'CmsController@destroy','as'=>'user.delete'));

	
	Route::post('proyectos/seccion/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));

	/*Reset Password*/
	Route::post('password/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));

	/*Seccion del chat */
	Route::get('chat',array('uses' => 'ChatController@showChat'));
	Route::post('chat',array('before' => 'csrf','uses' => 'ChatController@postChat'));

	/*Seccion de dudas y sugerencias */
	Route::get('contacto',array('uses' => 'ContactoController@showContacto'));
	Route::post('contacto',array('uses' => 'ContactoController@postContacto', 'as' =>'contacto.sent'));

	
	

});

