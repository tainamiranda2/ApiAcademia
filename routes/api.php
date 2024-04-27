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

//Route::get('/user', [USerController::class, 'index'])->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/user', [AcademiaController::class, 'index']);
Route::post('/user', [AcademiaController::class, 'store']);
Route::put('/user/{id}', [AcademiaController::class, 'update']);
Route::delete('/user/{id}', [AcademiaController::class, 'index']);


Route::post('/teste', [AuthController::class, 'login']);
Route::get('/academia', [AcademiaController::class, 'index']);
Route::post('/academia', [AcademiaController::class, 'store']);
Route::put('/academia/{id}', [AcademiaController::class, 'update']);
Route::delete('/academia/{id}', [AcademiaController::class, 'index']);