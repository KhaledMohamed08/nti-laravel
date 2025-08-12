<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('home');
})->middleware('auth.check');


Route::get('/test', [TestController::class, 'test']);

Route::get('posts', [PostController::class, 'index'])->name('posts.index')->middleware('auth');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit')->middleware(['auth:web', 'can:update,post']);
Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/delete/{post}', [PostController::class, 'delete'])->name('posts.destroy');

require __DIR__ . '/posts.php';


Route::get('login', [AuthController::class, 'loginForm'])->name('login')->middleware('guest');
Route::get('register', [AuthController::class, 'registerForm'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login.request');
Route::post('logout', [AuthController::class, 'logout'])->name('logout.request');
