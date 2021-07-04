<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }
    /*total price of all cart products*/
    public function getFullPrice(){
            $sum=0;
            foreach ($this->products as $product){
                $sum+=$product->getPriceForCount();
            }
            return $sum;
    }
    public function saveOrder($name, $phone){
        if ($this->status==0) {
            /*to save the name and phone of the client in DB*/
            $this->name = $name;
            $this->phone = $phone;
            $this->status = 1;
            $this->save();
            //to remove the products after proceeding the order
            session()->forget('orderId');
            //dd($request->all());
            return true;
        }else{
            return false;
        }
        }
}
