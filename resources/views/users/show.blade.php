@extends('layouts.bootstrap')

@section('content')
	<div class="container">
        <div class="row">
     		<div class = "col-sm-12">
			<h1>{{ $users->name }}</h1>
			<h1>{{ $users->email }}</h1>
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
            			{{-- @foreach($users->posts as $user->$post)
            			<tr>
            				<td>{{ $user->post->id }}</td>
            				<td>{{ $user->post->title }}</td>
            				<td><a href="{{ $user->post->url }}">{{ $user->post->url }}</a></td>
            				<td>{{ $user->post->content }}</td>
            				<td>{{ $user->post->name }}</td>
            			</tr>
						@endforeach --}}
            		</tbody>
            	</table>
    		</div>
    	</div>
    </div>
@stop