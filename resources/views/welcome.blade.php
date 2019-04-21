@extends('layouts/main')
@section('content')
<h1 class=" container text-center">Home</h1>
<div class="container text-center">
<ul class="list-group">
	  <h3>Awesome blog post title <small>3/6/2015</small></h3>
      @foreach ( $posts as $post )
      <div class="blog-post" >
      <!--<h3>Awesome blog post title <small>3/6/2015</small></h3>-->
      <img class="thumbnail" src="photos/image{{$post->id}}.jpg">

      <li style = "width: 860px; margin-bottom: 42px;background-color: gray" class="list-group-item container jumbotron"><a href="articles/{{$post->post_name}}" style=";color: white">{{ $post->post_title }}</a></li>


</ul>
       @endforeach

</div>
</div>
@endsection

