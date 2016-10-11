@extends('layouts.bootstrap')

@section('top-script')
	<title>Uppercase Exercise</title>
@stop

@section('content')
	<h1>Uppercase Exercise</h1>
	<h2>You entered: {{ $string }}</h2>
	<h2>Uppercased: {{ $upperCase }}</h2>
@stop