<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HumanResourceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MessageController;

Route::post('/payroll', [HumanResourceController::class, 'payroll']);
Route::apiResource('/products', ProductController::class,);
Route::get('/showtwo/{category}', [ProductController::class, 'showtwo']);

Route::apiResource('/messages', MessageController::class);    

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');