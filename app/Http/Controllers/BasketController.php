<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
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
    public function basketConfirm(Request $request){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        $success= $order ->saveOrder($request->name, $request->phone);
        //flash messages for the order confirmation
        if ($success){
            session()->flash('success', 'Your order is under treatment');
        }else{
            session()->flash('warning', 'Something went wrong!');
        }
        return redirect()->route('index');
    }

    public function basketPlace()
    {
        /*fixed wrong price bug*/
        /*if the price is null it's going to be redirected to the index otherwise the order is
        going to be captured*/
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
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
    /*for increasing the "count"*/
    /*look at https://laravel.com/docs/8.x/eloquent-relationships for pivot doc*/
        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();

    } else {
            //to put the article in the cart and send it to the order table. TEST OK!
            $order->products()->attach($productId);
            //dump($order->products);
        }
    $product = Product::find($productId);
        session()->flash('success', "You are added  $product->name in the cart");
        /*fix the bug with adding products(every time it adds one at new line). The same return i put in basketRemove*/
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
        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
        $product = Product::find($productId);
        session()->flash('warning', "You are removed  $product->name from the cart");
        return redirect()->route('basket');
        }
}
