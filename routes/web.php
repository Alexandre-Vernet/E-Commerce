<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\ProductController;

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

// Products
Route::get("/", [ProductController::class, 'index'])->name("products.index");
Route::get("/produits", [ProductController::class, 'index'])->name("products.index");
Route::get("/produits/{slug}", [ProductController::class, 'show'])->name("products.show");

//Cart
Route::get("panier", [CartController::class, 'index'])->name("cart.index");
Route::post("/panier/ajouter", [CartController::class, 'store'])->name("cart.store");
Route::delete('/panier{rowId}', [CartController::class, 'destroy'])->name("cart.delete");

Route::get("/videpanier", function () {
    Cart::destroy();
    return redirect()->route("products.index");
});


// Checkout
Route::get('/paiement', [CheckoutController::class, 'index'])->name('checkout.index');