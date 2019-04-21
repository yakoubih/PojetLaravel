@extends('layouts/main')
@section('content')

<h1 class=" container text-center">Articles</h1>

<div class="container text-center">
<!--<h3>Awesome blog post title <small>3/6/2015</small></h3>-->
  @foreach ( $post as $post )
  <li> {{ $post->post_title }} </li>
<div class="blog-post">
<!--<h3>Awesome blog post title <small>3/6/2015</small></h3>-->
<img class="thumbnail" src="photos/image{{$post->id}}.jpg">
<div class="list-group-item container jumbotron" style = "width: 860px; margin-bottom: 42px;background-color: gray;">
<ul class="menu simple">
<li><a  href="articles/{{$post->post_name}}" style="color: white">{{ $post->post_title }}</a></li>
<li><a href="#" style="color: white"> Comments: 3</a></li>

                    <form action="{{ url('/articles') }}" method="POST" novalidate>
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('comment_name') ? 'is-invalid' : '' }}" name="comment_name" id="comment_name" placeholder="Votre nom"
                                value="{{ old('comment_name') }}" required="required"> {!! $errors->first('comment_name', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group" >
                            <input type="email" class="form-control {{ $errors->has('comment_email') ? 'is-invalid' : '' }}" name="comment_email" id="comment_email" placeholder="Votre email"
                                value="{{ old('comment_email') }}"> {!! $errors->first('comment_email', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group ">
                            <textarea class="form-control {{ $errors->has('comment_content') ? 'is-invalid' : '' }}" name="comment_content" id="comment_content" placeholder="Votre commentaire">{{ old('comment_content') }}</textarea>                            {!! $errors->first('comment_content', '<div class="invalid-feedback has-error">:message</div>') !!}
                        </div>
                        <button type="submit" class="btn btn-secondary" style="color: white">Commenter</button>
                    </form>

</ul>
</div>
</div>


  @endforeach 
  </div>


@endsection