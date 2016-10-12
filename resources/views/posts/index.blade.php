@extends('layouts.bootstrap')

@section('title', 'Index Posts')

@section('content')
	<div class="container-fluid">
	<table class="table table-bordered">
  		<tr>	
  			<th>ID</th>
  			<th>Title</th>
  			<th>URL</th>
  			<th>Content</th>
  		</tr>
  		@foreach($posts as $post)
  		<tr>
  			<td>{{ $post->id }}</td>
  			<td>{{ $post->title }}</td>
  			<td>{{ $post->url }}</td>
  			<td>{{ $post->content }}</td>
  		</tr>	
  		@endforeach
	</table>
	</div>
@stop

