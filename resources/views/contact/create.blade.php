@extends('layouts/main')
@section('content')
<h1>Contactez nous</h1>

<div class=" container jumbotron text-center">
                    <form action="{{ url('/contact') }}" method="POST" novalidate>
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" name="contact_name" id="contact_name" placeholder="Votre nom"
                                value="{{ old('contact_name') }}" required="required"> {!! $errors->first('contact_name', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group" >
                            <input type="email" class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" name="contact_email" id="contact_email" placeholder="Votre email"
                                value="{{ old('contact_email') }}"> {!! $errors->first('contact_email', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group ">
                            <textarea class="form-control {{ $errors->has('contact_message') ? 'is-invalid' : '' }}" name="contact_message" id="contact_message" placeholder="Votre message">{{ old('contact_message') }}</textarea>                            {!! $errors->first('contact_message', '<div class="invalid-feedback has-error">:message</div>') !!}
                        </div>
                        <button type="submit" class="btn btn-secondary">Envoyer !</button>
                    </form>
</div>


@endsection
