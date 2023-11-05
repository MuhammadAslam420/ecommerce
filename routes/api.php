<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\HomePageController;

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
// User registration and Login Api's
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout']);
// Home Page/Screen Api's //
Route::get('/home-page/setting',[HomePageController::class,'homePage']);
Route::get('/home/new-arrivals',[HomePageController::class,'homeNewArrivals']);
Route::get('/home/featured-products',[HomePageController::class,'homeFeaturedProduct']);
Route::get('/home/categories',[HomePageController::class,'categories']);
Route::get('/home/brands',[HomePageController::class,'brands']);
Route::get('/home/banners',[HomePageController::class,'sliders']);
