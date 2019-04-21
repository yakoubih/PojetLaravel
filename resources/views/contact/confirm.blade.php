@extends('layouts/main')
@section('content')
<style type="text/css">
	
#contact {
 width: 100%;
 padding: 2px; 
 border-spacing: 2px; 
}
.tabcenter{
   margin-left:auto;
   margin-right:auto;
}
</style>

<script type="text/javascript">
	alert("Etes-vous sure de votre message?")
</script>

<h1 style="text-align: center">Nous avons bien reçu votre demande et allons vous répondre dans les plus bref delais<br>Merci à bientot !  </h1>


<h3>Nous avons bien reçu votre demande et nous allons vous répondre dans les plus bref delais <br>Merci à bientot !</h3>
<h4><li>Liste des messages envoyés :</li></h4>

      <table id="contact">
	    <thead>
	      <tr>
	        <th>Nom</th>
	        <th>Email</th>
	        <th>Message</th>
	      </tr>
	    </thead>
	    
	    <tbody>
		@foreach ( $contacts as $contact )
	      <tr>
	        <td class="Nom">{{ $contact->contact_name }}</td>
	        <td class="Email">{{ $contact->contact_email }}</td>
	        <td class ="Message">{{ $contact->contact_message }}</td>
	      </tr>
		@endforeach
	    </tbody>    

@endsection
