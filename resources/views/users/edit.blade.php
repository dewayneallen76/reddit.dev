@extends('layouts.bootstrap')

@section('title', 'Edit Post')

@section('content')
	<form class="form" method="POST" action="{{ action('UsersController@update', $user->id) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		Name: <input class="form-control" type="text" name="name" value="{{ (old('name') ==null) ? $user->name : old('name') }}">
		Email: <input class="form-control" type="text" name="email" value="{{ (old('email') ==null) ? $user->email : old('email') }}">
		Password: <input class="form-control" type="text" name="password" value="{{ (old('password') ==null) ? $user->password : old('password') }}">
		<br>
		<button class="btn-primary btn" type="Submit">Edit Post <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
	</form>
@stop 