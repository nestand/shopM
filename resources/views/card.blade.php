{{-- the card template for any product--}}
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="" alt="">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}} $.</p>
            <p>
                <a href="/basket/1/add" class="btn btn-primary" role="button">In cart</a>
                {{--to generate the link to a product page--}}
                <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-default" role="button">More details</a>
            </p>
        </div>
    </div>
</div>
