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

Route::get('/', function () {
	$name = 'Dewayne';
	// cameron's preferred way of passing data to the view 
	$data['name'] = $name;
    return view('my-first-view')->with($data);
});

Route::get('/sayhello/{name?}', function($name = 'Dewayne') {
	return view('my-first-view');
});
// Create a route at the path /uppercase that takes a parameter that is a word and returns a string that is the word in all caps.
Route::get('/uppercase/{string}', function($string) {
	$data['string'] = $string;
	$data['upperCase'] = (strtoupper($string));
	return view('uppercase')->with($data);
});
// Create a route at the path /increment that takes a parameter that is a number and returns the number plus one.
Route::get('/increment/{number}', function($number) {
	return $number + 1;
});
// Create a route at the path /add that takes two parametes that are numbers and returns the sum of the numbers.
Route::get('/add/{a}/{b}', function($a,$b) {
	return $a + $b;
});
// 10.2.2 Views Exercises
// Create a route that responds to a GET request on the path /rolldice.
// Within the route, return a random number between 1 and 6.
// Add a view named roll-dice.php. Instead of just returning the random number, show the view and have it display the random number.
// Modify the route to take in a parameter named guess. Someone will access the route by visiting http://reddit.dev/rolldice/1, where 1 is their guess.
Route::get('/rolldice/{guess}', function($guess) {
	$data['guess'] = $guess;
	$data['dice'] = rand(1,6);

	if($guess == $data['dice']) {
		$data['result'] = 'Good Job!';
	} else {
		$data['result'] = 'Wrong, Try Again!';
	}
	return view('roll-dice')->with($data);
});