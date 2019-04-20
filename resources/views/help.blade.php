@extends('layouts/main')
@section('content')

<h1 class=" container text-center">Bienvenue dans notre assistance d'aide:</h1>


<div class="jumbotron container text-center" style="background-color: grey;margin-top: 25px;width:890px">
	<em style="color: white;font-size: 25px;">vous avez rencontrer des difficultés, pour communiquer avec l'un de nos conseillé à fin d'exposer votre problème, veuillez choisir un moyen :</em>
<ul style="margin-top:6%">
	<a href="#"  class="button" style="background-color:white;color: gray">appel télephonique </a>
	<a href="/contact" class="button" style="background-color: white;color: gray">e-mail</a>

</ul></div>


@endsection
