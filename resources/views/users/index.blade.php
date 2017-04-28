@extends('layouts.bootstrap')

@section('title', 'All Users')

@section('content')
<br>
<br>
<div class="container">
	<div class="row">
		<form class="navbar-form navbar-left" role="search" method="GET" action="{{ action('UsersController@index') }}">
        <div class="form-group">
          <input input id="search" type="search" name="search" class="form-control" placeholder="Search Users">
        </div>
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
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
            				<td><a href="{{ action('UsersController@show', $user->id) }}"</a>{{ $user->name }}</td>
            				<td>{{ $user->email }}</td>
            			</tr>
            			@endforeach
            		</tbody>
            	</table>
            	<div class="text-center">{!! $users->render() !!}</div>
    		</div>
    </div>
</div>
@stop
