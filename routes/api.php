<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/post', PostController::class);
Route::resource('/device', DeviceController::class);
Route::resource('/wajibpajak', WajibPajakController::class);
Route::resource('/Ticketing', TicketingController::class);
<<<<<<< HEAD
Route::resource('/Ketersediaan', KetersediaanController::class);
Route::resource('/Pembelian', PembelianController::class);
=======
Route::resource('/Maintenance', MaintenanceController::class);
Route::resource('/Ketersediaan', KetersediaanController::class);
Route::resource('/Pembelian', PembelianController::class);

>>>>>>> 2fe3a2223560acb7622419a8e59f58d892e11acc
