@extends('layouts.bootstrap')

@section('title', 'Edit Post')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@update', $post->id) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		Title: <input class="form-control" type="text" name="title" value="{{ (old('title') ==null) ? $post->title : old('title') }}">
		URL: <input class="form-control" type="text" name="url" value="{{ (old('url') ==null) ? $post->url : old('url') }}">
		Content: <textarea class="form-control" type="text" name="content">{{ (old('content') ==null) ? $post->content : old('content') }}</textarea>
		<button class="btn-success btn" type="Submit">Edit Post</button>
	</form>
@stop 