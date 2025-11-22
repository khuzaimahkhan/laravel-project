<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Models\Product;

// Home Page
Route::get('/', function () {
    $products = Product::all(); // Fetch all products
    return view('pages.home', compact('products'));
})->name('home');

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/productdet/{id}', [ProductController::class, 'show'])->name('productdet');

// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/increase/{id}', [CartController::class, 'increaseQuantity'])->name('cart.increase');
Route::get('/cart/decrease/{id}', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

// Checkout Routes
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/confirm', [CheckoutController::class, 'confirmPurchase'])->name('checkout.confirm');
Route::get('/checkout/thankyou', [CheckoutController::class, 'thankYou'])->name('checkout.thankyou');

// Auth Routes
Route::view('/login', 'auth.login')->name('login');
Route::view('/signup', 'auth.signup')->name('signup');
Route::view('/contact', 'pages.contact')->name('contact');

// Admin Product Routes
Route::get('/admin/products', [ProductController::class, 'adminIndex'])->name('admin.products');
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.product.create');
Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin.product.store');
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
Route::post('/admin/products/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
Route::delete('/admin/products/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product.delete');
