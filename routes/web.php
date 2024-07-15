<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index']);
Route::get('/category/{id}', [BookController::class, 'category']);
Route::get('/book/{id}', [BookController::class, 'show']);

