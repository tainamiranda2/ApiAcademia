<?php

use App\Http\Controllers\Api\V1\AcademiaController;
use App\Http\Controllers\Api\V1\USerController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/


//teste de authorização

Route::post('/teste', [AuthController::class, 'login']);
//Route::get('/user', [AuthController::class, 'index'])->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/user', [USerController::class, 'index']);
Route::post('/user', [USerController::class, 'store']);
Route::put('/user/{id}', [USerController::class, 'update']);
Route::delete('/user/{id}', [USerController::class, 'destroy']);

Route::get('/academia', [AcademiaController::class, 'index']);
Route::post('/academia', [AcademiaController::class, 'store']);
Route::put('/academia/{id}', [AcademiaController::class, 'update']);
Route::delete('/academia/{id}', [AcademiaController::class, 'destroy']);