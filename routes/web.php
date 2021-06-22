<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//solved the bug with «[MainController] Target class does not exist».
//i use {} to apply the parameter that I am going to re-use in the product page for example
//i use {?} to make this parameter not obligatory otherwise if it's empty ERR PAGE 404


Route::get( '/', [ MainController::class, 'index' ])->name('index');
Route::get( '/categories', [ MainController::class, 'categories' ])->name('categories');
Route::get( '/{category}', [ MainController::class, 'category' ])->name('category');
Route::get( '/mobiles/{product?}', [ MainController::class, 'product' ])->name('product');



