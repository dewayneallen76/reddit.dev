@extends('layouts.master')

@section('top-script')
	<title>Increment</title>
@stop

@section('content')
	<h1>Increment</h1>
	<h2>You entered: {{ $number }}</h2>
	<h2>Incremented to: {{ $increment }}</h2>
@stop