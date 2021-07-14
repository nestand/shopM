<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;

//command -> php artisan make:controller MainController
class MainController extends Controller
{
    public function index()
    {
        // $url = route('index');
        /*to get all the products from DB*/
        $products=Product::get();
        return view('index', compact('products'));
    }

    public function categories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code)
    {
        /*Fixed SQLSTATE[42S22]: Column not found: 1054 Unknown column 'category' in 'where clause'
        (SQL: select * from `categories` where `category` is null limit 1) -> 'code' missed :)*/

        // to check and get if the category exists
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
           }
        //dd($category);

        //The compact() function creates an array from variables and their values.


    public function product($category, $product)
    {
        //dump(request());
        dd($product);
        //dd($product);

        return view('product', ['product' => $product]);
    }

        //$products = Product::get();
        //return view('product', compact('products'));
        //dd($product);
        //['product' => $product] is a default parameter if not ERR "Too few arguments to function"


    public function basket() {
        return view('basket');
    }
    public function basketPlace() {
        return view('order');
    }
}
