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
Route::get('principal','PrincipalController@getHome');

Route::get('login', function(){
	echo "Login de Usuario";
});

Route::get('logaut', function(){
	echo "Logaut de usuario";
});

Route::get('catalog','CatalogController@getIndex');

Route::get('catalog/show/{id}', 'CatalogController@getShow');

Route::get('catalog/create','CatalogController@getCreate');

Route::get('catalog/edit/{id}','CatalogController@getEdit');

Route::post('catalog/create', 'CatalogController@postCreate');

Route::put('catalog/edit/{id}','CatalogController@postEdit');