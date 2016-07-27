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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/profile/{username}', function($username) {
  $username = App\User::where('firstname', $username)->firstOrFail();
  return view('profile.view_profile')->with('username', $username);
});

Route::get('/profile', function() {
  return view('profile.profile');
});

Route::auth();

Route::get('/home', 'HomeController@index');
