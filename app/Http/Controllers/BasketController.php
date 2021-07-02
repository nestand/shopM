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
        /*fixed wrong price bug*/
        $orderId = session('orderId');
        if(is_null($orderId)){
            return view('index');
        }
       $order = Order::find($orderId);
        return view('order', compact('order'));
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
    /*for increase the "count"*/
    if ($order->products->contains($productId)) {
        dd('OK!');
    }
    dd('Dont work');
    //to put the article in the cart and send it to the order table. TEST OK!
    $order->products()->attach($productId);
    //dump($order->products);

        /*fix bug with adding products(every time it adds one at new line). The same return i put in basketRemove*/
        return redirect()->route('basket');
    }
    /*Basket remove method*/
    public function basketRemove($productId){
        $orderId = session('orderId');
        /*it shouldn't be NULL but to be on the safe side we will check it again*/
        if (is_null($orderId)){
            return redirect()->route('basket');
            }
/*removing product with detach*/
        $order = Order::find($orderId);
        $order->products()->detach($productId);
        return redirect()->route('basket');
        }
}
