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
    return view('welcome');
});

Route::get('/sayhello/{name?}', function($name = 'Kristy') {
	return 'Hello '. $name;
});
// Create a route at the path /uppercase that takes a parameter that is a word and returns a string that is the word in all caps.
Route::get('/uppercase/{string}', function($string) {
	return (strtoupper($string));
});
// Create a route at the path /increment that takes a parameter that is a number and returns the number plus one.
Route::get('/increment/{number}', function($number) {
	return $number + 1;
});
// Create a route at the path /add that takes two parametes that are numbers and returns the sum of the numbers.
Route::get('/add/{a}/{b}', function($a,$b) {
	return $a + $b;
});