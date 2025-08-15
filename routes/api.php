<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Team API Routes
Route::apiResource('teams', TeamController::class)->only(['index', 'show']);

// Category API Routes
Route::apiResource('categories', CategoryController::class)->only(['index', 'show']);

// Project API Routes
Route::apiResource('projects', ProjectController::class)->only(['index', 'show']);

