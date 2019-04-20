@extends('layouts/main')
@section('content')
<div class="container text-center" style="color: white;margin-top: 5%">
<h1><li class="list-group-item" style="background-color:gray "><p>Author:</p>{{$post->author->name}}</li></h1>
<li class="list-group-item" style="background-color:gray; font-size: 25px">  
	<p></p>{{$post->post_content}}</li>
</div>
@endsection 
