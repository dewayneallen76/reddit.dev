@extends('layouts.bootstrap')

@section('title', 'All Users')

@section('content')
<div class="container">
	<div class="row">
		<div></div>
		<form action="index_submit" method="get" action="{{ action('UsersController@index') }}">
        	<div class="form-group">
            	<input input id= "search" type="search" class="form-control" placeholder="Search">
        	</div>
        	<button type="submit" class="btn btn-primary btn-default"><i class="fa fa-search"></i>Search Users</button>
    	</form>
	</div>
    <div class="row">
            <div class="col-lg-8">
            	<table class="table table-hover">
            		<thead>
            			<tr>
            				<th>ID</th>
            				<th>Name</th>
            				<th>Email</th>
            			</tr>
            		</thead>
            		<tbody>
            			@foreach($users as $user)
            			<tr>
            				<td>{{ $user->id }}</td>
            				<td>{{ $user->name }}</td>
            				<td>{{ $user->email }}</td>
            			</tr>
            			@endforeach
            		</tbody>
            	</table>
            	{!! $users->render() !!}
    		</div>
    </div>
</div>
@stop
