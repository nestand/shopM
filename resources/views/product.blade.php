{{--dependecy of the master template--}}
@extends ('layouts.master')
{{--showing the product title--}}
@section('title', 'Product')
{{--getting the code to repeat--}}
@section ('content')
        <h1>{{ $product }}</h1>
        <p>Price: <b>900 $.</b></p>
        <img src="/storage/products/iphone_x.jpg">
        <p>Excellent phone with 64 gb memory</p>
        <a class="btn btn-success" href="#">Add to cart</a>
@endsection
