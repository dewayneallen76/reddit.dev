<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }
    // Added controllers for the exercises done for cirriculum 10.2.3
    public function showUppercase($string) 
    {
    	$data['string'] = $string;
		$data['upperCase'] = (strtoupper($string));
		return view('uppercase')->with($data);
    }

    public function increment($number) 
    {
    	$data['number'] = $number;
		$data['increment'] = $number + 1;
		return view('increment')->with($data);
    }

    public function addNumbers($a,$b) 
    {	
    	$data['a'] = $a;
		$data['b'] = $b;
		$data['total']= $a + $b;
		return view('add')->with($data);
    }
}