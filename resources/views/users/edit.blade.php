@extends('layouts.bootstrap')

@section('title', 'Edit User')

@section('content')
<br>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
			<form class="form" method="POST" action="{{ action('UsersController@update', $users->id) }}">
				{!! csrf_field() !!}
				{!! method_field('PUT') !!}
				Name: <input class="form-control" type="text" name="name" value="{{ (old('name') ==null) ? $users->		name : old('name') }}">
				Email: <input class="form-control" type="text" name="email" value="{{ (old('email') ==null) ? $users->		email : old('email') }}">
				New Password: <input class="form-control" type="password" name="password">
				@if($errors->has('password'))
                <div class="alert alert-danger">
                    {{ $errors->first('password') }}
                </div>
       	 		@endif
				Confirm Password: <input class="form-control" type="password" name="confirm_password">
				<br>
				@if($errors->has('confirm_password'))
                <div class="alert alert-danger">
                    {{ $errors->first('confirm_password') }}
                </div>
        		@endif
				<form class="form" method="POST" action="{{ action('UsersController@update', $users->id) }}">
				<button class="btn-primary btn" type="Submit">Edit User <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>

				<form class="form" method="POST" action="{{ action('UsersController@destroy', $users->id) }}">
				<button class="btn-primary btn" type="Submit">Delete User <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
				{!! csrf_field() !!}
				{!! method_field('DELETE') !!}
				<br>
			</form>
		</div>
	</div>
</div>
@stop
