<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Highshop Mini </title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Highshop Mini </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="#">All products</a></li>
                <li  class="active" ><a href="/categories">Categories</a>
                </li>
                <li ><a href="/basket">In cart</a></li>
                <li><a href="/reset">Reset all</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/admin/home">Admin panel</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <div class="starter-template">
        //to get the cat name from DB + fixed the rediraction way
        @foreach ($categories as $category)
        <div class="panel">
            {{--to make the link relative (as it was absolute)--}}
            <a href="/{{ $category->code }}">
                <img src="/storage/categories/mobile.jpg">
                <h2>{{ $category->name }}</h2>
            </a>
            <p>
                {{ $category->description }}
            </p>
        </div>   
        @endforeach
    </div>
</div>
</body>
</html>
