@extends('layouts/main')
@section('content')

<h1 class=" container text-center">Articles</h1>

<div class="container text-center">
<!--<h3>Awesome blog post title <small>3/6/2015</small></h3>-->
  @foreach ( $post as $post )
  <li> {{ $post->post_title }} </li>
<div class="blog-post">
<!--<h3>Awesome blog post title <small>3/6/2015</small></h3>-->
<img class="thumbnail" src="https://placehold.it/850x350">

<div class="list-group-item container jumbotron" style = "width: 860px; margin-bottom: 42px;background-color: gray;">
<ul class="menu simple">
<li><a  href="articles/{{$post->post_name}}" style="color: white">{{ $post->post_title }}</a></li>
<li><a href="#" style="color: white">Comments: 3</a></li>
</ul>
</div>
</div>


  @endforeach 
  </div>


@endsection