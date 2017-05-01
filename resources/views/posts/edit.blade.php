@extends('layouts.bootstrap')

@section('title', 'Edit Post')

@section('content')
<br>
<br>
	<form class="form" method="POST" action="{{ action('PostsController@update', $post->id) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		Title: <input class="form-control" type="text" name="title" value="{{ (old('title') ==null) ? $post->title : old('title') }}">
		URL: <input class="form-control" type="text" name="url" value="{{ (old('url') ==null) ? $post->url : old('url') }}">
		Content: <textarea class="form-control" type="text" name="content">{{ (old('content') ==null) ? $post->content : old('content') }}</textarea>
		<br>
		<button class="btn-primary btn" type="Submit">Edit Post <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
	</form>
@stop
