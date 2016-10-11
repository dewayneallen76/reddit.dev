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
// Refactored to use controller 10.2.4 cirriculum. 
Route::get('/', 'HomeController@showWelcome');

// Route::get('/', function () {
// 	$name = 'Dewayne';
// 	// cameron's preferred way of passing data to the view 
// 	$data['name'] = $name;
//     return view('my-first-view')->with($data);
// });

Route::get('/sayhello/{name?}', function($name = 'Dewayne') {
	return view('my-first-view');
});
// Refactored to use controller. 10.2.4 in cirriculum.
Route::get('/uppercase/{string}', 'HomeController@showUppercase');

// Refactored to use controller. 10.2.4 in cirriculum.
Route::get('/increment/{number}', 'HomeController@increment');

// Refactored to use controller. 10.2.4 in cirriculum.
Route::get('/add/{a}/{b}', 'HomeController@addNumbers'); 

// 10.2.2 Views Exercises
// Create a route that responds to a GET request on the path /rolldice.
// Within the route, return a random number between 1 and 6.
// Add a view named roll-dice.php. Instead of just returning the random number, show the view and have it display the random number.
// Modify the route to take in a parameter named guess. Someone will access the route by visiting http://reddit.dev/rolldice/1, where 1 is their guess.
Route::get('/rolldice/{guess?}', function($guess = 1) {
	$data['guess'] = $guess;
	$data['dice'] = rand(1,6);

	if($guess == $data['dice']) {
		$data['result'] = 'Good Job!';
	} else {
		$data['result'] = 'Wrong, Try Again!';
	}
	return view('roll-dice')->with($data);
});