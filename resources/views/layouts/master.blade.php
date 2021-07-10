{{--the layout to re-use in other templates--}}
    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Highshop Mini: @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a class="navbar-brand" href="/">Highshop Mini</a></li>
                <li><a href="/">All products</a></li>
                <li ><a href="{{ route('categories') }}">Categories</a>
                </li>
                <li ><a href="{{ route('basket') }}">Cart</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{route('login')}}">Login</a></li>
                @endguest
                @auth
                    <li><a href={{route('login')}}>Admin</a></li>
                    <li><a href="{{route('get-logout')}}">Logout</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!--<nav class="navbar navbar-expand-sm navbar-inverse navbar-fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-header">

            <a class="navbar-brand" href="/">Highshop Mini</a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="/">All products</a></li>
                <li ><a href="{{ route('categories') }}">Categories</a>
                </li>
                <li ><a href="{{ route('basket') }}">In cart</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{route('login')}}">Admin panel</a></li>
                @endguest
                @auth
                    <li><a href={{route('login')}}>Admin panel</a></li>
                    <li><a href="{{route('get-logout')}}">Logout</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>-->
<div class="container">
    <div class="starter-template">
@if(session()->has('success'))
    @endif
            @yield('content')
            <div class="starter-template">
            </div>
    </div>
</div>

<!--Scripts for burger menu-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
