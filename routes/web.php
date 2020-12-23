<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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

// Voir les produits
Route::get("/produits", [ProductController::class, 'index'])->name("products.index");
Route::get("/produits/{slug}", [ProductController::class, 'show'])->name("products.show");

// Panier
Route::post("/panier/ajouter", [CartController::class, 'store'])->name("cart.store");