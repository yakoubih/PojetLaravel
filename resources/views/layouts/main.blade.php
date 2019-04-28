<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Projet laravel</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<style>
	.navbar-nav {
		    flex-direction: row;
	}
</style>
</head>
<body>

<div class="top-bar" style="background-color:gray">
<div class="top-bar-left" >
<ul class="menu" style="background-color:gray">
<!--<li class="menu-text">Blog</li>-->
<li><a href="/" style="color: white">Home</a></li>
<li><a href="/articles" style="color: white">Articles</a></li>
<li><a href="/contact" style="color: white">Contact</a></li>
<li><a href="/help" style="color: white" >Help</a></li>
</ul>
</div>
<div class="row top-bar-right">
<!--<li style="list-style: none;padding-right: 20px;"><a href="/register" style="color: white">Subscribe</a></li>
<li style="list-style: none;"><a href="/login" style="color: white">Login</a></li>-->
 <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" style="margin-right: 20px;">
                                <a class="nav-link" href="{{ route('login') }}" style=" color: white;background-color: gray">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" style="background-color: gray">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: white; background-color: gray">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btn-primary nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
</div>
</div>

<div class="callout large primary text-center" style="height:20%;background-color:gray; color: white;margin-top: 19px">
<div class="row column text-center">
<h1 class=" container text-center">Notre Bloc Laravel</h1>

</div>
</div>

<div class="row">
@yield('content')
</div>
<script>
      $(document).foundation();
    </script>
 <p style="background-color: gray;color: white;width: 860px" class="container text-center"><em>DERDJINI Hamza & YAKOUBI Hocine</em></p>
</body>
</html>
