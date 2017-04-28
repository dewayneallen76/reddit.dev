@extends('layouts.bootstrap')

@section('title', 'Show Posts')

@section('content')
    <!-- Page Content -->
<br>
<br>
<div>
    <div class="row">
        <div class="col-sm-4">
                <!-- Title -->
                <h1>{{ $post->title }}</h1>
                <!-- Author -->
                <p class="lead">
                    by <a href="{{ action('UsersController@show', $post->user->id )}}">{{ $post->user->name }}</a>
                </p>
        </div>
        <div class="col-sm-4">
        <br>
        <br>
            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span> Posted {{ $post->created_at->diffForHumans() }}</p>
            <p><span class="glyphicon glyphicon-time"></span> Last Update {{ $post->updated_at->diffForHumans() }}</p>
            {{-- <h4>Votes:</h4> --}}
        </div>
        <!-- <div class="col-sm-4">
                <form method="POST" action="{{ action('PostsController@vote') }}">
                {!! csrf_field() !!}
                    <input type="hidden" name="postId" value="{{ $post->id }}">
                    <input type="hidden" name="voteValue" value="1">
                    <button type="submit" class="btn btn-primary glyphicon glyphicon-chevron-up"></button>
                </form> -->
                <!-- <h4> Vote</h4>
                <form method="POST" action="{{ action('PostsController@vote') }}">
                    {!! csrf_field() !!}
                    <input type="hidden" name="postId" value="{{ $post->id }}">
                    <input type="hidden" name="voteValue" value="0">
                <button type="submit" class="btn btn-primary glyphicon glyphicon-chevron-down"></button>
                </form> -->
        <!-- </div> -->
    </div>
            <hr>
            <!-- Preview Image -->
            <a href="{{ $post->url }}">{{ $post->url }}</a>
            <hr>
            <!-- Post Content -->
        <div class="container"></div>
            <p class="lead">{{ $post->content }}</p>
            <hr>
            @if (Auth::id() == $post->created_by)
            <form class="form" method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary btn active" method="POST">Edit Post <span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                <!-- <button class="btn btn-primary btn active" role="button"></span>Delete Post <span class="glyphicon glyphicon-trash" aria-hidden="true"></button> -->
            @endif
            </form>

    </div>
</div>
@stop
