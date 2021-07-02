{{--dependecy of the master template--}}
@extends ('master')
{{--showing the title--}}
@section('title', 'Basket')
{{--getting the code to repeat--}}
@section ('content')

<div class="starter-template">
    <h1>Cart</h1>
    <p>Check-out and pay</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>QT</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product);
            <tr>
                <td>
                    {{--link to the product from the cart--}}
                    <a href="{{route('product', [$product->category->code, $product->code])}}">
                        <img height="56px" src="">
                        {{$product->name}}                    </a>
                </td>
                <td><span class="badge">{{$product->pivot->count}}</span>
                    {{--form-inline -> correction for add/remove product button--}}
                    <div class="btn-group form-inline">
                        {{--adding the same product--}}
                        {{--fixed the bug for the 'Post' method--}}
                        <form action="{{route('basket-add', $product)}}" method="POST">
                            <button type="submit" class="btn btn-success"><span
                                    class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                            @csrf
                        </form>
                        {{--Basket remove--}}
                        <form action="{{route('basket-remove', $product)}}" method="POST">
                            <button type="submit" class="btn btn-danger"><span
                                    class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                            @csrf
                        </form>
                    </div>
                </td>
                <td>{{$product->price}} $.</td>
                <td>{{$product->price}} $.</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3">Total</td>
                <td>{{--{{$product->price}}--}} $.</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            {{--button direction to the proceed payment--}}
            <a type="button" class="btn btn-success" href="{{route('basket-place')}}">Proceed the payment</a>
        </div>
    </div>
</div>
@endsection
