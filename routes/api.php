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
=======
Route::resource('/Pembelian', PembelianController::class);
>>>>>>> 008f706281212d5cc517328aec1a8a4ebc3c9fe6
