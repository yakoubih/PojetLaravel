@extends('layouts/main')
@section('content')
<!--
<div class="container text-center" style="color: white;margin-top: 5%">
<h1><li class="list-group-item" style="background-color:gray "><p>Author:</p>{{$post->author->name}}</li></h1>
<li class="list-group-item" style="background-color:gray; font-size: 25px">  
	<p></p>{{$post->post_content}}</li>
</div>
-->

<div class="container">
	<form action="{{ url('/articles/update') }}" method="POST" novalidate>
	@csrf <!-- {{ csrf_field() }} -->

   	<div class="row">
		<div class="col-md-6 offset-md-3">	
	   		@guest
				<p><span style="background-color: gray ; color: white ; text-align: center;font-size: 25px;width: 560px"> <span style="font-weight: bold;">Author:</span>{{$post->author->name}}</p>
			@else
				<p><span style="background-color: gray ; color: white ; text-align: center;font-size: 25px;width: 560px"> <span style="font-weight: bold;">Author:</span>{{$post->author->name}}</p>	
	   		@endguest
   		</div>
   	</div>
   	<p>&nbsp;</p>
	<div class="row">
		<div class="col-md-6 offset-md-3">
			@guest
				<div class="alert alert-primary" role="alert">
									<p>{{$post->post_content}}</p>

				</div>
			@else
				<textarea name="content" rows="10">{{$post->post_content}}</textarea> 
   			@endguest
		</div>
	</div>
	@guest
	@else
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<input type="submit" class="btn btn-info" value="Valider"/>
			<a class="btn btn-danger" href="/articles">Annuler</a>
		</div>
		<input name="id" value="{{$post->id}}" hidden/>
	</div>   			
	@endguest
	</form>
</div>
@endsection 
