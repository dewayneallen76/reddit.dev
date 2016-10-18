@extends('layouts.bootstrap')

@section('content')
	<div class="container">
        <div class="row">
     		<div class = "col-sm-12">
			<h3>{{ $users->name }}</h3>
			<h3>{{ $users->email }}</h3>
            <h3>Posts:</h3>
     	</div>
            <div class="col-lg-8">
            	<table class="table table-hover">
            		<thead>
            			<tr>
            				<th>ID</th>
            				<th>Title</th>
            				<th>URL</th>
            				<th>Content</th>
            				<th></th>
            			</tr>
            		</thead>
            		<tbody>
            			@foreach($users->posts as $post)
            			<tr>
            				<td>{{ $post->id }}</td>
            				<td><a href="{{ action('PostsController@show', $post->id) }}"</a>{{ $post->title }}</td>
            				<td><a href="{{ $post->url }}">{{ $post->url }}</a></td>
            				<td>{{ $post->content }}</td>
            				<td>{{ $post->name }}</td>
            			</tr>
						@endforeach
            		</tbody>
            	</table>
    		</div>
    	</div>
    </div>
@stop