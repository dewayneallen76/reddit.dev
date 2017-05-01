@extends('layouts.bootstrap')

@section('content')
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h1>Sign Up:</h1>
			<form method="POST" action="{{ action('Auth\AuthController@postRegister') }}">
				{{ csrf_field() }}
				<div class="form-group">
			    	<label for="name">Name:</label>
			    	<input type="text" class="form-control" name="name" value="{{ old('name') }}">
						@if($errors->has('name'))
		                <div class="alert alert-danger">
		                    {{ $errors->first('name') }}
		                </div>
		        		@endif
			  	</div>
				<div class="form-group">
			    	<label for="email">Email:</label>
			    	<input type="text" class="form-control" name="email" value="{{ old('email') }}">
						@if($errors->has('email'))
		                <div class="alert alert-danger">
		                    {{ $errors->first('email') }}
		                </div>
		        		@endif
			  	</div>
				<div class="form-group">
			    	<label for="password">Password:</label>
			    	<input type="password" class="form-control" name="password">
						@if($errors->has('password'))
		                <div class="alert alert-danger">
		                    {{ $errors->first('password') }}
		                </div>
		        		@endif
			  	</div>
				<div class="form-group">
			    	<label for="password_confirmation">Password Confirmation:</label>
			    	<input type="password" class="form-control" name="password_confirmation">
						@if($errors->has('password_confirmation'))
		                <div class="alert alert-danger">
		                    {{ $errors->first('password_confirmation') }}
		                </div>
		        		@endif
			  	</div>
			  	<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
@stop
