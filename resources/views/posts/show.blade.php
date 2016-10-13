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
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at }}</p>
                <p><span class="glyphicon glyphicon-time"></span> Last Update on {{ $post->updated_at }}</p>
                <hr>
                <!-- Preview Image -->
                <a href="{{ $post->url }}">{{ $post->url }}</a>
                <hr>
                <!-- Post Content -->
                <p class="lead">{{ $post->content }}</p>
                <hr>
                <button class="btn btn-default btn-primary" type="submit">Edit Post</button>
                <button class="btn btn-default btn-danger" type="submit">Delete Post</button>
            </div> 
        </div>
    </div> 
@stop