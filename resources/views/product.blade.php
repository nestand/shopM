{{--dependecy of the master template--}}
@extends ('layouts.master')
{{--showing the product title--}}
@section('title', 'Product')
{{--getting the code to repeat--}}
@section ('content')
    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->category->name }}</h2>
    <p>: <b>{{ $product->price }} руб.</b></p>
    <img src="{{ Storage::url($product->img) }}">
    <p>{{ $product->description }}</p>
        <a class="btn btn-success" href="#">Add to cart</a>
@endsection
