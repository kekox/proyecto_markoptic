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

Route::get('/', 'HomeController@showWelcome');
Route::get('dashboard', 'HomeController@showDashboard');

Route::get('lara',function(){
	return "Hola que hace";
});


Route::get('login', array('uses' => 'AdminController@showLogin'));
Route::post('login', array('uses' => 'AdminController@postLogin'));

Route::get('create', array('uses' => 'AdminController@showCreate'));
Route::post('create', array('uses' => 'AdminController@postCreate'));

Route::get('logout', array('uses' => 'AdminController@getLogout'));

Route::group(array('before' => 'auth'), function()
{
    
    Route::get('dasboard', function(){
        echo 'Bienvenido ';
        
        // Con la función Auth::user() podemos obtener cualquier dato del usuario 
        // que este en la sesión, en este caso usamos su correo y su id
        // Esta función esta disponible en cualquier parte del código
        // siempre y cuando haya un usuario con sesión iniciada
        echo 'Bienvenido '. Auth::user()->correo . ', su Id es: '.Auth::user()->id ;
    });
});

