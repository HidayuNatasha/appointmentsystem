<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Customer
Route::get('/customers',[App\Http\Controllers\CustomerController::class,'dashboard'])->name('customer.index');
Route::get('/customersProfile',[App\Http\Controllers\CustomerController::class,'index'])->name('customer.profile');
Route::get('/customersList',[App\Http\Controllers\CustomerController::class,'indexAdmin'])->name('customer.indexAdmin');
Route::get('customers/{customer}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');
Route::put('customers/{customer}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');

//Admin
//Route::resource('admin','App\Http\Controllers\AdminController');
Route::get('admins',[App\Http\Controllers\AdminController::class,'index'])->name('admin.index');
Route::view('admins/create','auth.admins-register')->name('admin.registration');
Route::post('admins/store',[App\Http\Controllers\AdminController::class,'store'])->name('admin.store');

//Car
Route::get('/cars',[App\Http\Controllers\CarController::class,'index'])->name('car.index');
Route::get('cars/create', [App\Http\Controllers\CarController::class,'create'])->name('car.create');
Route::post('cars', [App\Http\Controllers\CarController::class, 'store'])->name('car.store');
Route::get('cars/{car}', [App\Http\Controllers\CarController::class, 'show'])->name('car.show');
Route::get('cars/{car}/edit', [App\Http\Controllers\CarController::class, 'edit'])->name('car.edit');
Route::put('cars/{car}', [App\Http\Controllers\CarController::class, 'update'])->name('car.update');
Route::delete('cars/{car}', [App\Http\Controllers\CarController::class, 'destroy'])->name('car.destroy');

Route::get('/carsList',[App\Http\Controllers\CarController::class,'indexCust'])->name('car.indexCust');

//Appointment
Route::get('/appointments',[App\Http\Controllers\AppointmentController::class,'index'])->name('appointment.index');
Route::get('appointments/create', [App\Http\Controllers\AppointmentController::class,'create'])->name('appointment.create');
Route::post('appointments', [App\Http\Controllers\AppointmentController::class, 'store'])->name('appointment.store');
Route::get('appointments/{appointment}', [App\Http\Controllers\AppointmentController::class, 'show'])->name('appointment.show');
Route::get('appointments/{appointment}/edit', [App\Http\Controllers\AppointmentController::class, 'edit'])->name('appointment.edit');
Route::put('appointments/{appointment}', [App\Http\Controllers\AppointmentController::class, 'update'])->name('appointment.update');
Route::delete('appointments/{appointment}', [App\Http\Controllers\AppointmentController::class, 'destroy'])->name('appointment.destroy');
Route::get('/getAppointment',[App\Http\Controllers\AppointmentController::class,'getAppointment'])->name('appointment.getAppointment');
Route::get('/verifyAppointmentAvailability',[App\Http\Controllers\AppointmentController::class,'verifyAppointmentAvailability'])->name('appointment.verifyAppointmentAvailability');
Route::get('/getAppointmentDetails',[App\Http\Controllers\AppointmentController::class,'getAppointmentDetails'])->name('appointment.getAppointmentDetails');


//admin punya view appointment
Route::get('/appointmentsList',[App\Http\Controllers\AppointmentController::class,'indexadmin'])->name('appointment.indexadmin');
Route::get('/appointmentsDetails',[App\Http\Controllers\AppointmentController::class,'showadmin'])->name('appointment.showadmin');
Route::get('/getSlotTitle',[App\Http\Controllers\AppointmentController::class,'getSlotTitle'])->name('appointment.getSlotTitle');
Route::delete('/deleteApp',[App\Http\Controllers\AppointmentController::class,'delete'])->name('appointment.delete');

//Service
Route::get('/services',[App\Http\Controllers\ServiceController::class,'index'])->name('service.index');
Route::get('services/create', [App\Http\Controllers\ServiceController::class,'create'])->name('service.create');
Route::post('services', [App\Http\Controllers\ServiceController::class, 'store'])->name('service.store');
Route::get('services/{service}', [App\Http\Controllers\ServiceController::class, 'show'])->name('service.show');
Route::get('services/{service}/edit', [App\Http\Controllers\ServiceController::class, 'edit'])->name('service.edit');
Route::put('services/{service}', [App\Http\Controllers\ServiceController::class, 'update'])->name('service.update');
Route::delete('services/{service}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('service.destroy');

Route::get('/servicesList',[App\Http\Controllers\ServiceController::class,'indexCust'])->name('service.indexCust');

//Slot
Route::get('/slots',[App\Http\Controllers\SlotController::class,'index'])->name('slot.index');
Route::get('slots/create',[App\Http\Controllers\SlotController::class,'create'])->name('slot.create');
Route::post('/storeslots',[App\Http\Controllers\SlotController::class,'store'])->name('slot.store');
Route::post('/updateslots',[App\Http\Controllers\SlotController::class,'update'])->name('slot.update');
Route::post('/ActivateAndDeactivate/{id}/{stat}',[App\Http\Controllers\SlotController::class,'ActivateAndDeactivate'])->name('slot.ActivateAndDeactivate');
