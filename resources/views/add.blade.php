@extends('layouts.bootstrap')

@section('top-script')
	<title>Add</title>
@stop

@section('content')
	<h1>Add</h1>
	<h2>First Number: {{ $a }}</h2>
	<h2>Second Number: {{ $b }}</h2>
	<h2>Total: {{ $total }}</h2>
@stop