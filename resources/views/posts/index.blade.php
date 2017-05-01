@extends('layouts.bootstrap')

@section('title', 'Index Posts')

@section('content')
<br>
<br>
  <div class="container-fluid">
    <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dreddit
                    <small>All Posts</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Project One -->
        @foreach($posts as $post)
        <div class="row">
            <div class="col-md-7">
                <a href="/posts/{{ $post->id }}">
                    <img class="img-responsive" src="http://www.fillmurray.com/460/300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{ $post->title }}</h3>
                {{-- <h4>Total Votes:</h4> --}}
                <h4>Posted By: {{ $post->user->name }}</h4>
                <h4><a href="{{ $post->url }}">{{ $post->url }}</a></h4>
                <p>{{ $post->content }}}</p>
                <a class="btn btn-primary" href="/posts/{{ $post->id }}">View Post <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>
      @endforeach
    </div>
    <div class="text-center">{!! $posts->appends(['search' => Request::get('search')])->render() !!}</div>
  </div>
@stop
