<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware('auth')->name('dashboard');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::post('/cart/add',          [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/buy-now',      [CartController::class, 'buyNow'])->name('cart.buy-now');
Route::post('/cart/remove/{id}',  [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update/{id}',  [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/clear',        [CartController::class, 'clear'])->name('cart.clear');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/pick-flowers', function () {
    return view('pick-flowers');
})->name('pick.flowers');

Route::get('/pick-grocery', function () {
    return view('pick-grocery');
})->name('pick.grocery');

Route::get('/pick-card', function () {
    return view('pick-card');
})->name('pick.card');

Route::get('/pick-message', function () {
    return view('pick-message');
})->name('pick.message');

Route::get('/pick-theme', function () {
    return view('pick-theme');
})->name('pick.theme');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/product/{id}', function ($id) {
    // Sample product catalogue — replace with DB query later
    $catalogue = [
        1 => [
            'id'             => 1,
            'name'           => 'Blooming Bouquet Gift Box',
            'price'          => 890000,
            'original_price' => 1200000,
            'rating'         => 4.5,
            'review_count'   => 32,
            'stock'          => 12,
            'tag'            => 'Bouquet',
            'img'            => 'buket_1.png',
            'gallery'        => ['buket_1.png', 'buket_2.png', 'buket_3.png', 'buket_4.png'],
            'description'    => 'A beautifully curated hand gift box bursting with fresh blooms 🌸 — perfect for every occasion! Each arrangement is lovingly handcrafted with seasonal flowers, tied with our signature satin ribbon. Makes the perfect surprising fit for someone special! 💝',
        ],
        2 => [
            'id'             => 2,
            'name'           => 'Rose Bloom Gift Set',
            'price'          => 650000,
            'original_price' => null,
            'rating'         => 4.0,
            'review_count'   => 18,
            'stock'          => 8,
            'tag'            => 'Gift Set',
            'img'            => 'buket_2.png',
            'gallery'        => ['buket_2.png', 'buket_1.png', 'buket_5.png', 'buket_6.png'],
            'description'    => 'A classic rose bloom gift set, handcrafted with the finest seasonal roses. Perfect for anniversaries, birthdays, or just because you care. 🌹',
        ],
        3 => [
            'id'             => 3,
            'name'           => 'Sunshine Daisy Bouquet',
            'price'          => 720000,
            'original_price' => null,
            'rating'         => 5.0,
            'review_count'   => 45,
            'stock'          => 5,
            'tag'            => 'Bouquet',
            'img'            => 'buket_3.png',
            'gallery'        => ['buket_3.png', 'buket_4.png', 'buket_1.png', 'buket_2.png'],
            'description'    => 'Bright sunflowers and cheerful daisies arranged in a stunning bouquet that radiates warmth and joy. 🌻🌼',
        ],
        4 => [
            'id'             => 4,
            'name'           => 'Green Garden Succulent',
            'price'          => 540000,
            'original_price' => null,
            'rating'         => 4.5,
            'review_count'   => 22,
            'stock'          => 15,
            'tag'            => 'Succulent',
            'img'            => 'buket_4.png',
            'gallery'        => ['buket_4.png', 'buket_5.png', 'buket_6.png', 'buket_3.png'],
            'description'    => 'A curated collection of lush succulents and tropical greens, perfect for home décor or as a long-lasting gift. 🌿',
        ],
        5 => [
            'id'             => 5,
            'name'           => 'Lavender Dream Bouquet',
            'price'          => 780000,
            'original_price' => 950000,
            'rating'         => 4.5,
            'review_count'   => 29,
            'stock'          => 7,
            'tag'            => 'Bouquet',
            'img'            => 'buket_5.png',
            'gallery'        => ['buket_5.png', 'buket_6.png', 'buket_1.png', 'buket_2.png'],
            'description'    => 'Soft lavender and purple blooms crafted into a dreamy bouquet — ideal for weddings, baby showers, or any romantic occasion. 💜',
        ],
    ];

    $product = $catalogue[$id] ?? $catalogue[1];

    // Related products: 4 items excluding current
    $related = collect($catalogue)
        ->filter(fn($p) => $p['id'] !== $product['id'])
        ->take(4)
        ->values()
        ->toArray();

    return view('product-detail', compact('product', 'related'));
})->name('product.detail');
