<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VehicleController;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});
// Customer Data Table
Route::get('/test', [CustomerController::class, 'index'])->name('form.test');

//Add Customer data from Form 
Route::get('/test/createCustomer', [CustomerController::class, 'create'])->name('form.createCustomer');
//Store Customer Data
Route::post('/test', [CustomerController::class, 'store'])->name('form.store');
//Edit Customer Data
Route::get('/test/{customer}', [CustomerController::class, 'edit'])->name('form.edit');
//Update Customer Data
Route::patch('/test/{customer}',[CustomerController::class, 'update']);
//Delete Customer Data
Route::delete('/test/{customer}', [CustomerController::class, 'destroy'])->name('form.delete');




//Vehicle Data Table 
Route::get('/vehicleTable', [VehicleController::class, 'index'])->name('form.vehicleTable');
Route::resource('/vehicles', \App\Http\Controllers\VehicleController::class);
// Enter Vehicle Data
Route::get('/vehicleTable/createVehicle', [VehicleController::class, 'create'])->name('form.createVehicle');
//Get Vehicle data from Form 
Route::post('/vehicleCreate', [VehicleController::class, 'store'])->name('vehicle.store');


//Delete Vehicle data
Route::delete('/vehicles/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicle.destroy');


Route::resource('/order', \App\Http\Controllers\OrderController::class);
Route::resource('/customer', \App\Http\Controllers\CustomerController::class);