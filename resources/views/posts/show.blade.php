@extends('layouts.bootstrap')

@section('title', 'Show Posts')

@section('content')
	<div class="container-fluid">
	<table class="table table-bordered">
  		<tr>	
  			<th>ID</th>
  			<th>Title</th>
  			<th>URL</th>
  			<th>Content</th>
  		</tr>
  		<tr>
  			<td>{{ $post->id }}</td>
  			<td>{{ $post->title }}</td>
  			<td><a href="{{ $post->url }}" target="_blank">{{ $post->url }}</a></td>
  			<td>{{ $post->content }}</td>
  		</tr>	
	</table>
	</div>
@stop