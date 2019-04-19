@extends('layouts/main')
@section('content')
<dir class="jumbotron container ">
<h1>Home</h1>

<ul class="list-group">
  @foreach ( $posts as $post )

  <li class="list-group-item"><a href="articles/{{$post->post_name}}">{{ $post->post_title }}</a></li>
  @endforeach
 
 </ul>
  </dir>
@endsection
