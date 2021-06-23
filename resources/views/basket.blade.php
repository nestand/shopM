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
            <tr>
                <td>
                    <a href="#">
                        <img height="56px" src="#">
                        iPhone X 64GB
                    </a>
                </td>
                <td><span class="badge">1</span>
                    <div class="btn-group">
                        <a type="button" class="btn btn-danger" href="#"><span
                                class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                        <a type="button" class="btn btn-success" href="#"><span
                                class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                    </div>
                </td>
                <td>456$.</td>
                <td>456$.</td>
            </tr>
            <tr>
                <td colspan="3">Total</td>
                <td>456$</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="#">Proceed the payment</a>
        </div>
    </div>
</div>
@endsection