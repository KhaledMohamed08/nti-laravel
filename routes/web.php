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
Route::get('products/create', [ProductController::class, 'create'])->name('products.create')->middleware('check.user.type');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show')->middleware('auth');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProductController::class, 'delete'])->name('products.delete');

Route::get('login', fn () => view('pages.auth.login'))->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'login'])->name('login.req')->middleware('guest');
Route::get('register', fn () => view('pages.auth.register'))->name('register')->middleware('guest');
Route::post('register', [AuthController::class, 'register'])->name('register.req')->middleware('guest');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::resource('profile', ProfileController::class);

// Route::get('test', fn () => view('layouts.main'));

