<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    // the cart
    //compact(): Undefined variable: order fixed by putting if (!is_null) for orderId.
    public function basket()
    {
        $orderId=session('orderId');
        if (!is_null($orderId)){
            $order=Order::findOrFail($orderId);
        }
        return view('basket', compact('order'));
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
/*check for orderId if not create one and keep the id*/
    if (is_null($orderId)){
        $order=Order::create();
        session(['orderId'=>$order->id]);
    }else{
        $order=Order::find($orderId);
    }
    //to put the article in the cart and send it to the order table. TEST OK!
    $order->products()->attach($productId);
    //dump($order->products);
return view('basket', compact('order'));
    }
}
