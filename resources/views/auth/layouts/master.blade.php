<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="ksSuYKnA4EytAfis4gZ1z98TxO8rZRWX5zGgktba">

    <title>Admin panel: @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!--JS script-->
    <link href="resources/js/app.js" rel="stylesheet">
    <link href="resources/js/bootstrap.js" rel="stylesheet">
    <!-- Styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar- navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="/">Return to the main
            </a>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li  class="active" ><a href="/">All products</a></li>
                    <li ><a href="{{ route('categories') }}">Categories</a>
                    </li>
                    <li ><a href="{{ route('basket') }}">In cart</a></li>
                    <li><a href="/">Reset all</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">@yield('title')</div>

                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
