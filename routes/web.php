<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);
Route::post('/categories/create', [CategoryController::class, 'store']);
Route::put('/categories/{id}/edit', [CategoryController::class, 'update']);
Route::get('categories/{id}/delete', [CategoryController::class, 'destroy']);
