<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('car' , [App\Http\Controllers\Api\CarController::class,'car']);

Route::get('car/{id}' , [App\Http\Controllers\Api\CarController::class,'carbyid']);

Route::get('branch' , [App\Http\Controllers\Api\BranshController::class,'branch']);

Route::get('city' , [App\Http\Controllers\Api\CityController::class,'city']);

Route::get('comment' , [App\Http\Controllers\Api\CommentController::class,'comment']);

Route::get('employee' , [App\Http\Controllers\Api\EmployeeController::class,'employee']);

Route::get('manager' , [App\Http\Controllers\Api\ManagerController::class,'manager']);
