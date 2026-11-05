<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NilaiController;
use App\Http\Controllers\Api\CategoryController;
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route praktikum nilai (aktif di lokal jika controller tersedia)
if (file_exists(app_path('Http/Controllers/Api/NilaiController.php'))) {
    Route::get('/nilai', [NilaiController::class, 'index']);
    Route::post('/nilai', [NilaiController::class, 'store']);
}

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('products', ProductController::class);

    Route::apiResource('categories', CategoryController::class);
});
