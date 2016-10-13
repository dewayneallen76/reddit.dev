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
                    by <a href="#">User ID: {{ $post->created_by }}</a>
                </p>
                <hr>
                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</p>
                <p><span class="glyphicon glyphicon-time"></span> Last Update on {{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</p>
                <hr>
                <!-- Preview Image -->
                <a href="{{ $post->url }}">{{ $post->url }}</a>
                <hr>
                <!-- Post Content -->
                <p class="lead">{{ $post->content }}</p>
                <hr>
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary btn-lg active" method="POST" role="button">Edit Post</a>
                <a href="/posts/{{ $post->id }}/delete" class="btn btn-danger btn-lg active" role="button">Delete Post</a>
            </div> 
        </div>
    </div> 
@stop