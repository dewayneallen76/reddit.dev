@extends('layouts.bootstrap')

@section('content')
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h1>Login:</h1>
			<form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
				{{ csrf_field() }}
				<div class="form-group">
			    	<label for="email">Email:</label>
			    	<input type="text" class="form-control" name="email" value="{{ old('email') }}">
				</div>
				<div class="form-group">
			    	<label for="password">Password:</label>
			    	<input type="password" class="form-control" name="password">
				</div>
			  	<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
@stop