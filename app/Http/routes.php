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
Route::get('/about', 'WelcomeController@about');
Route::get('home', 'HomeController@index');


Route::get('superheros', 'SuperherosController@index');
Route::get('superheros/{id}', 'SuperherosController@edit');
Route::post('superheros', 'SuperherosController@store');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
