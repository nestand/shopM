{{--dependecy of the master template--}}
@extends ('master')
{{--showing the category title--}}
@section('title', 'Category ' . $category->name)
{{--getting the code to repeat--}}
@section ('content')

    <div class="starter-template">
        <h1>
            {{-- show the cat name --}}
            {{ $category->name }}
                       
            {{--if loop to change the cat name--}}
            
            {{-- @if($category == 'mobile')
                Mobile phones
            @elseif($category == 'portable')
                Portable
            @elseif($category == 'appliance')
                Appliances
            @endif --}}
        </h1>
        <p>
            {{ $category->description }}
        </p>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="#/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
                    <div class="caption">
                        <h3>iPhone X 64GB</h3>
                        <p>71990 $.</p>
                        <p>
                            <a href="#/basket/1/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="#/mobiles/iphone_x_64" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="#/storage/products/iphone_x_silver.jpg" alt="iPhone X 256GB">
                    <div class="caption">
                        <h3>iPhone X 256GB</h3>
                        <p>89990 $.</p>
                        <p>
                            <a href="#/basket/2/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="#/mobiles/iphone_x_256" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="#/storage/products/htc_one_s.png" alt="HTC One S">
                    <div class="caption">
                        <h3>HTC One S</h3>
                        <p>12490 $.</p>
                        <p>
                            <a href="#/basket/3/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="#/mobiles/htc_one_s" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="#/storage/products/iphone_5.jpg" alt="iPhone 5SE">
                    <div class="caption">
                        <h3>iPhone 5SE</h3>
                        <p>17221 $.</p>
                        <p>
                            <a href="#/basket/4/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="#/mobiles/iphone_5se" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
