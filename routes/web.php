<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/create', [CustomerController::class, 'create']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit']);
Route::put('/customers/{customer}', [CustomerController::class, 'update']);
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy']);
Route::resource('services', ServiceController::class);
Route::resource('appointments', AppointmentController::class);
Route::get('/dashboard', [DashboardController::class, 'index']);