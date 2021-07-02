<?php

use App\Http\Controllers\BasketController;
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

/*
//solved the bug with «[MainController] Target class does not exist».
//i use {} to apply the parameter that I am going to re-use in the product page for example
//i use {?} to make this parameter not obligatory otherwise if it's empty ERR PAGE 404
// php artisan route:list -> to check existing list of the routes and see the action! Excellent command :)
// php artisan route:clear -> second excellent command! Helped me to solve 'index' not defined
Route::get('/', 'App\Http\Controllers\Api\MainController@index')->name('index');
*/

Route::get( '/', [MainController::class, 'index'])->name('index');
Route::get( '/categories', [MainController::class, 'categories'])->name('categories');
Route::get( '/basket', [BasketController::class, 'basket'])->name('basket');
Route::get( '/{category}', [MainController::class, 'category'])->name('category');
Route::get( '/mobiles/{product?}', [MainController::class, 'product'])->name('product');
Route::get( '/basket/place', [BasketController::class, 'basketPlace'])->name('basket-place');
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');


