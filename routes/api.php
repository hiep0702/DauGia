<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;

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

//product
Route::get('/product',[ProductController::class,'index']);
Route::get('/product/{id}',[ProductController::class,'show']);
Route::post('/product',[ProductController::class,'store']);
Route::put('/product/{id}',[ProductController::class,'update']);
Route::delete('/product/{id}',[ProductController::class,'destroy']);

//session
Route::get('/session',[SessionController::class,'index']);
Route::get('/session/{id}',[SessionController::class,'show']);
Route::post('/session',[SessionController::class,'store']);
Route::put('/session/{id}',[SessionController::class,'update']);
Route::delete('/session/{id}',[SessionController::class,'destroy']);

//bid
Route::get('/bid',[BidController::class,'index']);
Route::get('/bid/{id}',[BidController::class,'show']);
Route::post('/bid',[BidController::class,'store']);
Route::put('/bid/{id}',[BidController::class,'update']);
Route::delete('/bid/{id}',[BidController::class,'destroy']);