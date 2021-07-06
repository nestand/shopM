<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Auth::routes([
    'reset'=>false,
    'confirm'=>false,
    'verify'=>false,
]);
Route::get('/logout', [LoginController::class, 'logout'])->name('get-logout');
Route::get('/home', [HomeController::class, 'authorize'])->name('home');

//Route::get('/logout', [Controller::class, 'logout'])->name('get-logout');

Route::get( '/', [MainController::class, 'index'])->name(' index');
Route::get( '/categories', [MainController::class, 'categories'])->name('categories');
Route::get( '/basket', [BasketController::class, 'basket'])->name('basket');
Route::get( '/{category}', [MainController::class, 'category'])->name('category');
Route::get( '/mobiles/{product?}', [MainController::class, 'product'])->name('product');
Route::get( '/basket/place', [BasketController::class, 'basketPlace'])->name('basket-place');
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');
Route::post( '/basket/place', [BasketController::class, 'basketConfirm'])->name('basket-confirm');




