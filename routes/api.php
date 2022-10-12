<?php

use App\Http\Controllers\Api\CareerController;
use App\Http\Controllers\Api\FriendController;
use App\Http\Controllers\Api\LiabilityController;
use App\Http\Controllers\Api\PlaceController;
use App\Http\Controllers\Api\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('places', PlaceController::class)->except(['create', 'edit']);
Route::resource('users', UserController::class);
Route::resource('liabilities', LiabilityController::class)->except(['create', 'edit']);
Route::resource('friends', FriendController::class)->except(['create', 'edit']);
Route::resource('careers', CareerController::class)->except(['create', 'edit']);
