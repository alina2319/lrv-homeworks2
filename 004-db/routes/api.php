<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/api/tokens/create', [\App\Http\Controllers\ApiTokenController::class, 'createToken']);

//Route::post('/api/tokens/create', function (Request $request) {
//    $token = $request->user()->createToken($request->token_name);
//
//    return ['token' => $token->plainTextToken];
//});

//Route::group(['middleware' => 'auth:sanctum'], function () {
//    Route::apiResource('/cars', \App\Http\Controllers\CarsController::class);
//});
