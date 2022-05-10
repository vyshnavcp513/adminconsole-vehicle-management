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
Route::post('/update-bike',[BikeController::class,'updateBikes'])->name('admin.updateBikes');
Route::get('/delete-bike/{id}',[BikeController::class,'deleteBikes'])->name('admin.deleteBikes');
//cars 
Route::get('/view-create-cars',[CarsController::class,'Createcars'])->name('admin.createCars');
//for save 
Route::POST('/save-cars',[CarsController::class,'saveCar'])->name('admin.saveCar');
//view cars
Route::get('/view-car',[CarsController::class,'viewCars'])->name('admin.viewCars');
//edit cars
Route::get('/view-edit-cars/{id}',[CarsController::class,'editCars'])->name('admin.editCars');
//update cars
Route::post('/update-car',[CarsController::class,'updateCars'])->name('admin.updateCars');
//delete cars
Route::get('/delete-car/{id}',[CarsController::class,'deleteCars'])->name('admin.deleteCars');

Route::get('is_active/{id}', [BikeController::class, 'isActive'])->name('admin.isActive');

// Route::get('is_active/{id}', [CarsController::class, 'isActive'])->name('admin.is_Active');



