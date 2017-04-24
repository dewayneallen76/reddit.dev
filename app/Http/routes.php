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

// Route::get('/', function () {
// 	$name = 'Dewayne';
// 	// cameron's preferred way of passing data to the view 
	// $data['name'] = $name;
//     return view('my-first-view')->with($data);
// });
Route::get('/sayhello/{name?}', function($name = "World")
{
	$data['name'] = $name;
    return view('my-first-view')->with($data);
});

// Refactored to use controller 10.2.4 cirriculum. 
Route::get('/', 'HomeController@showWelcome');

// Refactored to use controller. 10.2.4 in cirriculum.
Route::get('/uppercase/{string}', 'HomeController@showUppercase');

// Refactored to use controller. 10.2.4 in cirriculum.
Route::get('/increment/{number}', 'HomeController@increment');

// Refactored to use controller. 10.2.4 in cirriculum.
Route::get('/add/{a}/{b}', 'HomeController@addNumbers'); 

// Refactored to use controller. 10.2.4 in cirriculum.
Route::get('/dice/{guess}', 'HomeController@rollDice');

// ROUTES TO CONTROLLERS
// Vote route
Route::post('posts/vote', 'PostsController@vote');
// Route to PostsController for posts.
Route::resource('posts', 'PostsController');

Route::get('/', 'PostsController@index');

// Route::get('/', ['middleware'=>'auth','uses'=>'PostsController@index'], function () 
// {
//    return redirect('posts')->action('PostsController@index');
// });

// Route to UsersController for users.
Route::resource('users', 'UsersController', ['except' => ['create', 'store']]);

// Route to orm-test for testing.
Route::get('orm-test', function ()
{

});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

