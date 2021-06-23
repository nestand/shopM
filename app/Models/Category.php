<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
/*relation many-to-many*/
    public function products(){
        return $this->hasMany(Product::class);
}

}
