{{--dependecy of the master template--}}
@extends ('master')
{{--showing the title--}}
@section('title', 'Check-out and pay')
{{--getting the code to repeat--}}
@section ('content')

<div class="starter-template">
    <h1>Confirm the order</h1>
    <div class="container">
        <div class="row justify-content-center">
            {{--fixed total price. Look at BasketController -> basketPlace and Order.php--}}
            <p>Total: <b>{{$order->getFullPrice()}} $.</b></p>
            <form action="#" method="POST">
                <div>
                    <p>Please enter your name to let our managers contact you for the order confirmation</p>

                    <div class="container">
                        <div class="form-group">
                            <label for="name" class="control-label col-lg-offset-3 col-lg-2">Name: </label>
                            <div class="col-lg-4">
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Phone number: </label>
                            <div class="col-lg-4">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="hidden" name="_token" value="qhk4riitc1MAjlRcro8dvWchDTGkFDQ9Iacyyrkj">					<br>
                    <input type="submit" class="btn btn-success" href="#" value="Confirm">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
