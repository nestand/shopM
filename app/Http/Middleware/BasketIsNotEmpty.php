<?php

namespace App\Http\Middleware;

use App\Models\Order;
use Closure;
use Illuminate\Http\Request;

class BasketIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /*redirection to index if the cart is empty*/
        $orderId=session('orderId');
        if (!is_null($orderId)) {
            $order=Order::findOrFail($orderId);
            if ($order->product->count()==0){
                session()->flash('warning', 'Your basket is empty!');
                return redirect()->route('index');
            }
        }
            return $next($request);
    }
}
