<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//to get the category for every product
public function getCategory(){
    //$category = Category::where('id', $this->category_id)->first();
    //dd($category);
    return Category::find($this->category_id);
}
//for the eloquent relation, many-to-many
public function category(){
    return $this->belongsTo(Category::class);
}
}
