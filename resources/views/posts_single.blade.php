@extends('layouts/main')
@section('content')
<div class="jumbotron container text-center">
<h1><li class="list-group-item"><p>Auteur:</p>{{$post->author->name}}</li></h1>
<li class="list-group-item"><p></p>{{$post->post_content}}</li>
</div>
@endsection 
