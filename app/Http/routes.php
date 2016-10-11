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
// 	$data['name'] = $name;
//     return view('my-first-view')->with($data);
// });
Route::get('/sayhello/{name?}', function($name = 'Dewayne') {
	return view('my-first-view');
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