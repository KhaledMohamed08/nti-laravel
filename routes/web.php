<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('products', function () {
//     $products = Product::all();

//     return view('products', ['products' => $products]);
// });

Route::get('/', [ProductController::class, 'index'])->name('products.index');


Route::prefix('products')->group(function () {
    Route::get('/create', [ProductController::class, 'create'])->name('products.create')->middleware('check.user.type');
    Route::get('/{product}', [ProductController::class, 'show'])->name('products.show')->middleware('auth');
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{product}', [ProductController::class, 'delete'])->name('products.delete');
});


Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::resource('profile', ProfileController::class);

Route::middleware('guest')->group(function () {
    Route::get('login', fn () => view('pages.auth.login'))->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.req');
    Route::get('register', fn () => view('pages.auth.register'))->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register.req');
});


// Route::get('test', fn () => view('layouts.main'));

