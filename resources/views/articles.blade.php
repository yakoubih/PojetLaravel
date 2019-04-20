@extends('layouts/main')
@section('content')

<h1>Articles</h1>

<div class="jumbotron container text-center">
<h3>Awesome blog post title <small>3/6/2015</small></h3>
  @foreach ( $post as $post )
  <li> {{ $post->post_title }} </li>
<div class="blog-post">
<!--<h3>Awesome blog post title <small>3/6/2015</small></h3>-->
<img class="thumbnail" src="https://placehold.it/850x350">

<div class="callout">
<ul class="menu simple">
<li><a href="#">{{ $post->post_title }}</a></li>
<li><a href="#">Comments: 3</a></li>
</ul>
</div>
</div>


  @endforeach 
  </div>


@endsection