<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('absens', [\App\Http\Controllers\AbsenController::class, 'index']);
Route::get('absens/{id}', [\App\Http\Controllers\AbsenController::class, 'show']);
Route::post('absens', [\App\Http\Controllers\AbsenController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
