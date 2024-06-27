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

use App\Http\Controllers\HealthcareCenterController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DoctorController;

Route::get('/', [HealthcareCenterController::class, 'index'])->name('home');

Route::resource('healthcare-centers', HealthcareCenterController::class);
Route::resource('clinics', ClinicController::class);
Route::resource('doctors', DoctorController::class);
Route::get('/healthcare-centers/{id}/edit', [HealthcareCenterController::class, 'edit'])->name('healthcare-centers.edit');





