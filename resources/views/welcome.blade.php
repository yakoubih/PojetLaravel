@extends('layouts/main')
@section('content')
<dir class="jumbotron container text-center">

<h1>Home</h1>
<ul class="list-group">
	  <h3>Awesome blog post title <small>3/6/2015</small></h3>
      @foreach ( $posts as $post )
      <div class="blog-post">
      <!--<h3>Awesome blog post title <small>3/6/2015</small></h3>-->
      <img class="thumbnail" src="https://placehold.it/850x350">
      <li class="list-group-item"><a href="articles/{{$post->post_name}}">{{ $post->post_title }}</a></li>


</ul>
       @endforeach

</div>
</dir>
@endsection


