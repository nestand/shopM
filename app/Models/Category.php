<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /*fix Add [_token] to fillable property to allow mass assignment on [App\Models\Category].
    in admin panel -> create new cat
    */
    protected $fillable =['code', 'name', 'description', 'img'];

    /*relation many-to-many*/
    public function products(){
        return $this->hasMany(Product::class);
    }

}

