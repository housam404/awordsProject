<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\NomineeController;
use App\Http\Controllers\Api\PerformanceController;
use App\Http\Controllers\Api\VoteController;

// Routes عامة
Route::get('categories', [CategoryController::class, 'index']);
Route::get('nominees/{category}', [NomineeController::class, 'byCategory']);
Route::get('performances', [PerformanceController::class, 'index']);

// Routes للمستخدم المسجل فقط
Route::middleware('auth:sanctum')->group(function () {
    Route::post('vote', [VoteController::class,'store']);
});