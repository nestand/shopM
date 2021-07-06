{{--the layout to re-use in other templates--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Highshop Mini: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            {{-- index page redirection added --}}
            {{--{{ route('index') replaced with / }} returns Route [index] not defined --}}
            <a class="navbar-brand" href="/">Highshop Mini</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li  class="active" ><a href="/">All products</a></li>
                <li ><a href="{{ route('categories') }}">Categories</a>
                </li>
                <li ><a href="{{ route('basket') }}">In cart</a></li>
                <li><a href="/">Reset all</a></li>
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
</nav>
<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
         <p class="alert alert-success">{{session()->get('success')}}</p>
        @endif
            @if(session()->has('warning'))
                <p class="alert alert-warning">{{session()->get('warning')}}</p>
            @endif
    @yield('content')
        <div class="starter-template">
    </div>
</div>
</div>
</body>
</html>
