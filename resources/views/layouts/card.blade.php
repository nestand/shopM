{{-- the card template for any product--}}
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="" alt="">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}} $.</p>
<p>
            {{--ERR 419 fixed -> csrf!--}}
            <form action= {{route('basket-add', $product->id)}} method="POST">
            <button type="submit" class="btn btn-primary" role="button">In cart</button>
            {{--to generate the link to a product page--}}
            <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-default" role="button">More details</a>
            @csrf
            </form>
            </p>
        </div>
    </div>
</div>
