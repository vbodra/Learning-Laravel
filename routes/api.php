<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticesController;
use App\Http\Controllers\PracticingRelatedTablesController;

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

Route::post('/practices', [PracticesController::class, 'store']);
Route::get('/practices', [PracticesController::class, 'index']);
Route::get('/practices/{id}', [PracticesController::class, 'getById']);
Route::delete('/practices/{id}', [PracticesController::class, 'destroy']);
Route::put('/practices/{id}', [PracticesController::class, 'updateById']);

Route::post('/relatedTables', [PracticingRelatedTablesController::class, 'store']);
Route::get('/relatedTables', [PracticingRelatedTablesController::class, 'index']);