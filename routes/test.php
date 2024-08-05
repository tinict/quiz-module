<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileGetController;
use App\Http\Controllers\ProfilePostController;
use App\Http\Controllers\ProfilePutController;
use App\Http\Controllers\ProfileDeleteController;

// Route::get('/api/test/profiles', [CreateProfile::class, 'create']);

Route::prefix('api')->group(function () {
    Route::get('test/profile', [ProfileGetController::class, 'store']);
    Route::post('test/profile', [ProfilePostController::class, 'store']);
    Route::put('test/profile/{id}', [ProfilePutController::class, 'store']);
    Route::delete('test/profile/{id}', [ProfileDeleteController::class, 'store']);
});
