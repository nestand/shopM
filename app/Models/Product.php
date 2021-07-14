<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    // OLD VERSION! to get the category for every product
//public function getCategory(){
    //$category = Category::where('id', $this->category_id)->first();
    //dd($category);
    //return Category::find($this->category_id);
    // }

/*fix Add [_token] to fillable property to allow mass assignment on [App\Models\Category].
in admin panel -> create new cat

NEW VERSION*/

    protected $fillable = ['name', 'code', 'price', 'category_id', 'description', 'img'];

//for the eloquent relation, many-to-many
public function category(){
    return $this->belongsTo(Category::class);
}
/*total price of one product if we put >1 QTY*/
public function getPriceForCount(){
    if (!is_null($this->pivot)){
return $this->pivot->count * $this->price;
    }
    return $this->price;
}
}
