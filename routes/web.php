<?php

use App\Http\Controllers\Web\KetersediaanController;
use App\Http\Controllers\Web\MaintenanceController;
use App\Http\Controllers\Web\PemasanganController;
use App\Http\Controllers\Web\PembelianController;
use App\Http\Controllers\Web\TicketingController;
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
    return view('home');
});

Route::get('datapemasanganalat', [PemasanganController::class, 'index']);

Route::get('datamaintenance', [MaintenanceController::class, 'index']);

Route::get('dataticketing', [TicketingController::class, 'index']);

Route::get('dataketersediaan', [KetersediaanController::class, 'index']);

Route::get('datapembelian', [PembelianController::class, 'index']);
