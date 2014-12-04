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

Route::get('/', function()
{
	return View::make('home')->with('name', array('username' => Auth::user()->username, 'first_name' => Auth::user()->first_name));
});

Route::get('login', array('uses' => 'LoginController@showLogin'));

Route::post('login', array('uses' => 'LoginController@doLogin'));

Route::get('users', function() {
	$users = User::all();

	return View::make('users')->with("users", $users);

});
// Route::get('login', function() {
// 	return View::make('login');
// });