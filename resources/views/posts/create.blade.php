@extends('layouts.bootstrap')

@section('title', 'Create Post')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
		URL: <input class="form-control" type="text" name="website" value="{{ old('website') }}">
		Content: <textarea class="form-control" type="text" name="content">{{ old('content') }}</textarea>
		<button class="btn-success btn" type="submit">Submit</button>
	</form>
@stop 