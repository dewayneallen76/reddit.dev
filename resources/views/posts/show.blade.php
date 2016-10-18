@extends('layouts.bootstrap')

@section('title', 'Show Posts')

@section('content')
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
                <!-- Blog Post -->
                <!-- Title -->
                <h1>{{ $post->title }}</h1>
                <!-- Author -->
                <p class="lead">
                    by <a href="{{ action('UsersController@show', $post->user->id )}}">{{ $post->user->name }}</a>
                </p>
                <hr>
                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted {{ $post->created_at->diffForHumans() }}</p>
                <p><span class="glyphicon glyphicon-time"></span> Last Update {{ $post->updated_at->diffForHumans() }}</p>
                <hr>
                <!-- Preview Image -->
                <a href="{{ $post->url }}">{{ $post->url }}</a>
                <hr>
                <!-- Post Content -->
                <p class="lead">{{ $post->content }}</p>
                <hr>
                @if (Auth::id() == $post->created_by)
                <form class="form" method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary btn active" method="POST" role="button">Edit Post <span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                    <button class="btn btn-primary btn active" role="button"></span>Delete Post <span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
                @endif
                </form>
            </div> 
        </div>
    </div> 
@stop