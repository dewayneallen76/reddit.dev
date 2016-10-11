@extends('layouts.bootstrap')

@section('title', 'Uppercase Exercise')

@section('content')
	<h1>Uppercase Exercise</h1>
	<h2>You entered: {{ $string }}</h2>
	<h2>Uppercased: {{ $upperCase }}</h2>
@stop