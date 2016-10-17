@extends('layouts.bootstrap')

@section('content')
	<div class="container">
        <div class="row">
     		<div class = "col-sm-12">
			<h1>{{ $user->name }}</h1>
			<h1>{{ $user->email }}</h1>
     	</div>
            <div class="col-lg-8">
            	<table class="table table-hover">
            		<thead>
            			<tr>
            				<th>ID</th>
            				<th>Title</th>
            				<th>URL</th>
            				<th>Content</th>
            				<th>Owner</th>
            				<th></th>
            			</tr>
            		</thead>
            		<tbody>
            			@foreach($posts->$users as $post)
            			<tr>
            				<td>{{ $post->created_by }}</td>
            				<td>{{ $post->title }}</td>
            				<td><a href="{{ $post->url }}">{{ $post->url }}</a></td>
            				<td>{{ $post->content }}</td>
            				<td>{{ $post->user->name }}</td>
            			</tr>
						@endforeach
            		</tbody>
            	</table>
    		</div>
    	</div>
    </div>
@stop