<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    // the cart
    public function basket()
    {
        return view('basket');
    }
    public function basketPlace()
    {
        return view('order');
    }
    /*Fixed Method App\Http\Controllers\BasketController::basketAdd does not exist with this function.
    The session added.
    */
    public function basketAdd($productId){
$orderId = session('orderId');
/*check for orderId*/
    if (is_null($orderId)){
        $order=Order::create();
        session(['orderId'=>$order->id]);
    }else{
        $order=Order::find($orderId);
    }
    dump($order);

    }
}
