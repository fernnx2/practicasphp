<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Rutas Ejercicio Modulo 1
Route::get('principal', function(){
	return view('principal');
});

Route::get('login', function(){
	echo "Login de Usuario";
});

Route::get('logaut', function(){
	echo "Logaut de usuario";
});

Route::get('catalog', function(){
	return view('catalog.index');
});

Route::get('catalog/show/{id}', function($id){
	return view('catalog.show', array('id'=>$id));
});

Route::get('catalog/create', function(){
	echo "Formulario para añadir pelicula";
});

Route::get('catalog/edit/{id}', function($id){
	echo "Modificar Pelicula con id :" . $id;
});
