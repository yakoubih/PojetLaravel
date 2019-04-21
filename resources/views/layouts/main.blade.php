<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Projet laravel</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
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
<li style="list-style: none;padding-right: 20px;"><a href="/register" style="color: white">Subscribe</a></li>
<li style="list-style: none;"><a href="/login" style="color: white">Login</a></li>
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
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
