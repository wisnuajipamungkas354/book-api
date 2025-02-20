<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return response()->json([
        'status' => 'success',
        'message' => 'Selamat Datang di API!'
    ]);
});

Route::controller(AuthController::class)->group(function() {
    Route::post('/register', 'registerUser');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout')->middleware('auth:sanctum');
});

Route::resource('books', BookController::class)->except('create', 'show', 'edit')->middleware('auth:sanctum');