<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('products',[ProductController::class, 'index']);

Route::apiResource('products', ProductController::class)->except('store');
Route::post('products', [ProductController::class, 'store'])->middleware('auth:sanctum');

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
