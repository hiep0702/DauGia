<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuctionController;

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

//auction
Route::get('/auction',[AuctionController::class,'index']);
Route::get('/auction/{id}',[AuctionController::class,'show']);
Route::post('/auction',[AuctionController::class,'store']);
Route::put('/auction/{id}',[AuctionController::class,'update']);
Route::delete('/auction/{id}',[AuctionController::class,'destroy']);