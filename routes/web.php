<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

/*-------------------| GİRİŞ |--------------------------------------------------- */

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

/*-------------------| ÇIKIŞ |--------------------------------------------------- */

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


/*-------------------| YÖNETİM PANELİ |--------------------------------------------------- */

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return redirect('/dashboard');
    });

    Route::get('/dashboard', [DashboardController::class, 'index']);

/*-------------------| MÜŞTERİLER |--------------------------------------------------- */

Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/create', [CustomerController::class, 'create']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit']);
Route::put('/customers/{customer}', [CustomerController::class, 'update']);
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy']);

/*-------------------| HİZMETLER |--------------------------------------------------- */

Route::resource('services', ServiceController::class)->except(['show']);

/*-------------------| RANDEVULAR |--------------------------------------------------- */

Route::resource('appointments', AppointmentController::class)->except(['show']);

});