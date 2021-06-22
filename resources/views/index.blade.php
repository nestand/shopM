{{--dependecy of the master template--}}
@extends ('master')
{{--showing the title 'main'--}}
@section('title', 'Main')
{{--getting the code to repeat--}}
@section ('content')

    <div class="starter-template">
        <h1>All products</h1>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
                    <div class="caption">
                        <h3>iPhone X 64GB</h3>
                        <p>400 $.</p>
                        <p>
                            <a href="/basket/1/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="/mobiles/iphone_x_64" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/storage/products/iphone_x_silver.jpg" alt="iPhone X 256GB">
                    <div class="caption">
                        <h3>iPhone X 256GB</h3>
                        <p>500 $.</p>
                        <p>
                            <a href="/basket/2/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="/mobiles/iphone_x_256" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/storage/products/htc_one_s.png" alt="HTC One S">
                    <div class="caption">
                        <h3>HTC One S</h3>
                        <p>200 $</p>
                        <p>
                            <a href="/basket/3/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="/mobiles/htc_one_s" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/storage/products/iphone_5.jpg" alt="iPhone 5SE">
                    <div class="caption">
                        <h3>iPhone 5SE</h3>
                        <p>450 $.</p>
                        <p>
                            <a href="/basket/4/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="/mobiles/iphone_5se" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/storage/products/beats.jpg" alt="Наушники Beats Audio">
                    <div class="caption">
                        <h3>Ear phones Beats Audio</h3>
                        <p>150 $.</p>
                        <p>
                            <a href="/basket/5/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="/portable/beats_audio" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/storage/products/gopro.jpg" alt="Камера GoPro">
                    <div class="caption">
                        <h3>Camera GoPro</h3>
                        <p>300 $.</p>
                        <p>
                            <a href="/basket/6/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="/portable/gopro" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/storage/products/video_panasonic.jpg" alt="Camera Panasonic HC-V770">
                    <div class="caption">
                        <h3>Camera Panasonic HC-V770</h3>
                        <p>600 $.</p>
                        <p>
                            <a href="/basket/7/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="/portable/panasonic_hc-v770" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/storage/products/delongi.jpg" alt="Кофемашина DeLongi">
                    <div class="caption">
                        <h3>Coffee machine DeLongi</h3>
                        <p>800 $.</p>
                        <p>
                            <a href="/basket/8/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="/appliances/delongi" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/storage/products/haier.jpg" alt="Холодильник Haier">
                    <div class="caption">
                        <h3>Fridge Haier</h3>
                        <p>500 $.</p>
                        <p>
                            <a href="/basket/9/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="/appliances/haier" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/storage/products/moulinex.jpg" alt="Блендер Moulinex">
                    <div class="caption">
                        <h3>Blender Moulinex</h3>
                        <p>50 $.</p>
                        <p>
                            <a href="/basket/10/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="/appliances/moulinex" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/storage/products/bosch.jpg" alt="Мясо$ка Bosch">
                    <div class="caption">
                        <h3>Mincer Bosch</h3>
                        <p>9200 $.</p>
                        <p>
                            <a href="/basket/11/add" class="btn btn-primary" role="button">In cart</a>
                            <a href="/appliances/bosch" class="btn btn-default"
                               role="button">More details</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection