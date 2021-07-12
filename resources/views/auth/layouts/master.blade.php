<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin panel: @yield('title')</title>

    <!-- Scripts -->
<!--
    <script src="/js/app.js" defer></script>
-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <!--main page redirection-->
            <a class="navbar-brand" href="/">
                Return to the main
            </a>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('categories.index') }}">Categories</a>
                            </li>
                            <li><a href="{{ route('products.index') }}">Products</a>
                            </li>
                            <li><a href="{{ route('home') }}">Orders</a></li>
                        </ul>
                        <!--Guest access-->
                        @guest
                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            </ul>
                        @endguest
                    <!--Authorized access-->
                        @auth
                                       <ul class="nav navbar-nav navbar-right">
                                       <li><a href="{{route('get-logout')}}">Logout</a></li>

                                    </ul>


                        @endauth
                    </div>
                </ul>
            </div>
    </nav>
    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>

