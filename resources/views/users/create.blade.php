@extends('layouts.bootstrap')

@section('title', 'Create User')

@section('content')

	<form class="form" method="POST" action="{{ action('UsersController@store') }}">
		{!! csrf_field() !!}
		Name: <input class="form-control" type="text" name="name" value="{{ old('name') }}">
		@if($errors->has('name'))
            <div class="alert alert-danger">
                {{ $errors->first('name') }}
            </div>
        @endif
		Email: <input class="form-control" type="text" name="email" value="{{ old('email') }}">
		@if($errors->has('email'))
			<div class="alert alert-danger">
				{{ $errors->first('email') }}
			</div>
		@endif
		Password: <textarea class="form-control" type="text" name="password">{{ old('password') }}</textarea>
		@if($errors->has('password'))
                <div class="alert alert-danger">
                    {{ $errors->first('password') }}
                </div>
        @endif
		<br>
		<button class="btn-success btn" type="submit">Create New User</button>
	</form>
@stop 