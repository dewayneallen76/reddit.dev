@extends('layouts.bootstrap')

@section('title, All Users')

@section('content')
<div class="container">
        <div class="row">
     		<div class = "col-sm-12">
     	</div>
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
            			<tr>
            				<td>{{ $user->id }}</td>
            				<td>{{ $user->name }}</td>
            				<td><a href="{{ $user->email }}">{{ $user->email }}</a></td>
            			</tr>
            		</tbody>
            	</table>
    		</div>
    	</div>
    </div>

@stop