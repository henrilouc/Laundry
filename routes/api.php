<?php

use App\Http\Controllers\api\laundryController;
use App\Http\Controllers\api\userTypeController;
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

Route::apiResource('laundry', laundryController::class);

Route::apiResource('userType', userTypeController::class);
