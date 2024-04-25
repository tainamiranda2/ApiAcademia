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

Route::get('/academia', [AcademiaController::class, 'index']);
Route::get('/user', [USerController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/teste', [AuthController::class, 'login']);
