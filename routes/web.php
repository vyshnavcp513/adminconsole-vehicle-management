<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\CarsController;


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
    return view('home');
});
//bikes
Route::get('/view-create-bikes',[BikeController::class,'viewCreatebikes'])->name('admin.viewCreateBikes');
Route::POST('/save-bikes',[BikeController::class,'saveBike'])->name('admin.saveBike');
Route::get('/view-bike',[BikeController::class,'viewBikes'])->name('admin.viewBikes');
Route::get('/view-edit-bikes/{id}',[BikeController::class,'editBikes'])->name('admin.editBikes');
Route::post('/update-bike/{id}',[BikeController::class,'updateBikes'])->name('admin.updateBikes');
Route::get('/delete-bike/{id}',[BikeController::class,'deleteBikes'])->name('admin.deleteBikes');
//cars 
Route::get('/view-create-cars',[CarsController::class,'viewCreatecars'])->name('admin.viewCars');
Route::POST('/save-cars',[CarsController::class,'saveCar'])->name('admin.saveCar');


