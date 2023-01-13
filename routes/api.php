<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APICont\FrizerController;
use App\Http\Controllers\APICont\MusterijaController;
use App\Http\Controllers\ApiAuthController;

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

Route::get('frizer', [FrizerController::class, 'index']);
Route::get('musterija', [MusterijaController::class, 'index']);
Route::get('frizer/{frizer}', [FrizerController::class, 'show']);
Route::get('musterija/{musterija}', [MusterijaController::class, 'show']);


Route::post('register', [ApiAuthController::class, 'register']);
Route::post('login', [ApiAuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('musterija', [MusterijaController::class, 'store']);
    Route::delete('musterija/{musterija}', [MusterijaController::class, 'destroy']);
    Route::post('logout', [ApiAuthController::class, 'logout']);
});




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
