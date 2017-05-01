@extends('layouts.bootstrap')

@section('title', 'Create Post')

@section('content')
<br>
<br>
	<form class="form" method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
		@if($errors->has('title'))
            <div class="alert alert-danger">
                {{ $errors->first('title') }}
            </div>
        @endif
		URL: <input class="form-control" type="text" name="url" value="{{ old('url') }}">
		@if($errors->has('url'))
			<div class="alert alert-danger">
				{{ $errors->first('url') }}
			</div>
		@endif
		Content: <textarea class="form-control" type="text" name="content">{{ old('content') }}</textarea>
		@if($errors->has('content'))
                <div class="alert alert-danger">
                    {{ $errors->first('content') }}
                </div>
        @endif
		<br>
		<button class="btn-success btn" type="submit">Submit New Post</button>
	</form>
@stop
