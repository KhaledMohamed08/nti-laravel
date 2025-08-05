<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});


Route::get('/test', [TestController::class, 'test']);

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/delete/{post}', [PostController::class, 'delete'])->name('posts.destroy');
