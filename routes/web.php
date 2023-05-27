<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\WebController::class, "home"]);
Route::get('/shop', [\App\Http\Controllers\WebController::class, "shop"]);
Route::get('/search', [\App\Http\Controllers\WebController::class, "search"]);
Route::get('/category/{category:slug}', [\App\Http\Controllers\WebController::class, "category"]);
Route::get('/details/{product:slug}', [\App\Http\Controllers\WebController::class, "details"]);
Route::get('/cart', [\App\Http\Controllers\WebController::class, "cart"]);
Route::get('/add-to-cart/{product}', [\App\Http\Controllers\WebController::class, "addToCart"]);
Route::get('/update-cart/{product}', [\App\Http\Controllers\WebController::class, "updateCart"]);
Route::get("/checkout",[\App\Http\Controllers\WebController::class,"checkout"]);
Route::post('/checkout', [\App\Http\Controllers\WebController::class, "placeOrder"]);
Route::get('/thank-you/{order}', [\App\Http\Controllers\WebController::class, "thankYou"]);
Route::get('success-transaction,{order}', [\App\Http\Controllers\WebController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction,{order}', [\App\Http\Controllers\WebController::class, 'cancelTransaction'])->name('cancelTransaction');
Route::get('/add-to-favourite/{product}', [\App\Http\Controllers\WebController::class, "addToFavourite"]);
Route::get('/favourite', [\App\Http\Controllers\WebController::class, "favourite"]);
Route::prefix("/admin")->middleware(["auth"])->group(function (){
    Route::get("/",[\App\Http\Controllers\AdminController::class,"dashboard"]);
    Route::get("/orders",[\App\Http\Controllers\AdminController::class,"orders"]);
    Route::get("/invoice/{order}",[\App\Http\Controllers\AdminController::class,"invoice"]);
});
//Route::get("/admin",[\App\Http\Controllers\AdminController::class,"dashboard"])->middleware(["auth"]);
//Route::get("/admin/orders",[\App\Http\Controllers\AdminController::class,"orders"])->middleware(["auth"]);
//Route::get("/admin/invoice",[\App\Http\Controllers\AdminController::class,"invoice"])->middleware(["auth"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
