@extends('layouts.bootstrap')

@section('title', 'Index Posts')

@section('content')
  <div class="container-fluid">
    <table class="table table-bordered">
      <tr>  
        <th>ID</th>
        <th>Title</th>
        <th>URL</th>
        <th>Content</th>
        <th>Created</th>
      </tr>
      @foreach($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td><a href="/posts/{{ $post->id }}" target="_blank">{{ $post->url }}</a></td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}
      </tr> 
      @endforeach
    </table>
    {!! $posts->render() !!}
  </div>
@stop

