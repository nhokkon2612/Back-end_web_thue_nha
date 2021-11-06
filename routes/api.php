<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HomeController;
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

Route::prefix('houses')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::post('/', [HomeController::class, 'create']);
});
Route::get('list', [HomeController::class, 'index']);
Route::post('create', [HomeController::class, 'create']);
Route::get('{id}/detail',[HomeController::class,'detail']);

Route::group(['middleware' => ['api'],
    'prefix' => 'auth'
], function ($router) {

    Route::middleware('jwt.auth')->group(function () {
        Route::post('me', [AuthController::class, 'me']);
        Route::get('logout', [AuthController::class, 'logout']);
    });

    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});

Route::group(['middleware' => ['api'],
    'prefix' => 'home'
], function ($router) {
    Route::middleware('jwt.auth')->group(function () {
        Route::get('form', [HomeController::class, 'getInfoForFormCreateAndUpdate']);
        Route::post('updatehomestatus', [HomeController::class, 'updateHomeStatus']);
    });
});

