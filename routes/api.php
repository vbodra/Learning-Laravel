<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarBrandsController;
use App\Http\Controllers\CarModelsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/carbrands', [CarBrandsController::class, 'store']);
Route::get('/carbrands', [CarBrandsController::class, 'index']);
Route::get('/carbrands/{id}', [CarBrandsController::class, 'getById']);
Route::delete('/carbrands/{id}', [CarBrandsController::class, 'destroy']);
Route::put('/carbrands/{id}', [CarBrandsController::class, 'updateById']);

Route::post('/carmodels', [CarModelsController::class, 'store']);
Route::get('/carmodels', [CarModelsController::class, 'index']);