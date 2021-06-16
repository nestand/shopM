<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Highshop Mini</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Highshop Mini</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="#">All products</a></li>
                <li ><a href="/categories">Categories</a>
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
        <h1>{{ $product }}</h1>
        <p>Price: <b>900 $.</b></p>
        <img src="/storage/products/iphone_x.jpg">
        <p>Excellent phone with 64 gb memory</p>
        <a class="btn btn-success" href="/basket/1/add">Add to cart</a>
    </div>
</div>
</body>
</html>
