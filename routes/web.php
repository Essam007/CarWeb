<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/fillable', [App\Http\Controllers\CaroController::class, 'getCars']);



Route::get('/cars/add', [App\Http\Controllers\CaroController::class, 'add']);

Route::post('/cars/store', [App\Http\Controllers\CaroController::class, 'store'])->name('cars.store');




