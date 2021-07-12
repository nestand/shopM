{{--dependecy of the master template--}}
@extends ('layouts.master')
{{--showing the product title--}}
@section('title', 'Product'. $product->name)
{{--getting the code to repeat--}}
@section ('content')
        <h1>{{ $product->name }}</h1>
        <p>Price: <b>{{ $product->price }} $.</b></p>
        <img height="240px" src="{{ $product->img }}">
        <p>{{ $product->description }}</p>
        @foreach($products as $product)
            @include('layouts.card', compact($product))
        @endforeach
        <a class="btn btn-success" href="#">Add to cart</a>
@endsection
