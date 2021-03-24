<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('/', function () {
    return view('welcome');
});


    Auth::routes();

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/fillable', [App\Http\Controllers\CaroController::class, 'getCars']);

##########################################

    Route::get('/cars/add', [App\Http\Controllers\CaroController::class, 'add'])->name('cars.add');

    Route::post('/cars/store', [App\Http\Controllers\CaroController::class, 'store'])->name('cars.store');

    Route::get('/cars/all', [App\Http\Controllers\CaroController::class, 'getAllCars'])->name('cars.all');

    Route::get('/cars/edit/{car_id}', [App\Http\Controllers\CaroController::class, 'editCar'])->name('cars.edit');

    Route::get('/cars/update/{car_id}', [App\Http\Controllers\CaroController::class, 'updateCar'])->name('cars.update');

    Route::get('/cars/delete/{car_id}', [App\Http\Controllers\CaroController::class, 'deleteCar'])->name('cars.delete');

    Route::get('/cars/{car_id}', [App\Http\Controllers\CaroController::class, 'showCar'])->name('cars.show');

##########################################

    Route::get('/search', [App\Http\Controllers\CaroController::class, 'index'])->name('search');

##########################################

    Route::get('comments/create', [App\Http\Controllers\CommentController::class, 'create'])->name('comments.create');
    Route::post('comments/store', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');

    Route::get('comments/index', [App\Http\Controllers\CommentController::class, 'index'])->name('comments.index');
    Route::get('comments/show/{comment_id}', [App\Http\Controllers\CommentController::class, 'show'])->name('comments.show');
    Route::get('/comments/delete/{comment_id}', [App\Http\Controllers\CommentController::class, 'deleteComment'])->name('$comments.delete');

    Route::get('comments/searching', [App\Http\Controllers\CommentController::class, 'indexes'])->name('search');
#####################

//Route::get('city-has-many', [App\Http\Controllers\CaroController::class, 'getCityBranshes']);

    Route::get('citys', [App\Http\Controllers\CaroController::class, 'citis'])->name('branshis.cityis');

    Route::get('branshes/{city_id}', [App\Http\Controllers\CaroController::class, 'branshis'])->name('branches');

    Route::get('/citys/delete/{city_id}', [App\Http\Controllers\CaroController::class, 'deletecity'])->name('citys.delete');

    Route::get('/branshs/delete/{bransh_id}', [App\Http\Controllers\CaroController::class, 'deletebransh'])->name('bransh.delete');

#################################

    Route::get('mango', [App\Http\Controllers\CaroController::class, 'mangers'])->name('managers.mangers');

    Route::get('employes/{maneger_id}', [App\Http\Controllers\CaroController::class, 'employee'])->name('managers.employes');

    Route::get('managers/addm', [App\Http\Controllers\ManagerController::class, 'added'])->name('manager.add');
    Route::post('/managers/store', [App\Http\Controllers\ManagerController::class, 'store'])->name('manager.store');

    Route::get('employee/adde', [App\Http\Controllers\EmployeeController::class, 'add'])->name('employee.add');
    Route::post('/employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');


    Route::get('/manegers/delete/{maneger_id}', [App\Http\Controllers\CaroController::class, 'deleteMang'])->name('manager.delete');

    Route::get('/employee/delete/{employee_id}', [App\Http\Controllers\CaroController::class, 'deleteemploye'])->name('employee.delete');
##################################
    Route::get('/city/add', [App\Http\Controllers\CityController::class, 'added'])->name('city.add');

    Route::post('/city/store', [App\Http\Controllers\CityController::class, 'store'])->name('city.store');
##################################
    Route::get('/branch/add', [App\Http\Controllers\BranchController::class, 'added'])->name('branch.add');

    Route::post('/branch/store', [App\Http\Controllers\BranchController::class, 'store'])->name('branch.store');


});
