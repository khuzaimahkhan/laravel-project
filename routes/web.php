<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/products', function () {
    return view('pages.products');
})->name('products');

Route::get('/productdet', function () {
    return view('pages.productdet');
})->name('productdet');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');





