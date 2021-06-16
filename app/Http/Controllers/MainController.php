<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//command -> php artisan make:controller MainController
class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function categories()
    {
        return view('categories');
    }

    public function category($category)
    {
        //dd($category);

        //The compact() function creates an array from variables and their values.
        return view('category', compact('category'));
    }

    public function product($product = null)
    {
        //dump(request());
        //dump($product);
        //dd($product);

        //['product' => $product] is a default parameter if not ERR "Too few arguments to function"
        return view('product', ['product' => $product]);
    }
}
