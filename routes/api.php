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

Route::post('/device/add' , [\App\Http\Controllers\DeviceController::class , 'store']);
Route::get('/device/read' , [\App\Http\Controllers\DeviceController::class , 'index']);
Route::get('/device/detail/{id}' , [\App\Http\Controllers\DeviceController::class , 'show']);
Route::post('/device/update/{id}' , [\App\Http\Controllers\DeviceController::class , 'update']);
Route::post('/device/delete/{id}' , [\App\Http\Controllers\DeviceController::class , 'destroy']);

Route::post('/wajibpajak/add' , [\App\Http\Controllers\WajibPajakController::class , 'store']);
Route::get('/wajibpajak/read' , [\App\Http\Controllers\WajibPajakController::class , 'index']);
Route::get('/wajibpajak/detail/{id}' , [\App\Http\Controllers\WajibPajakController::class , 'show']);
Route::post('/wajibpajak/update/{id}' , [\App\Http\Controllers\WajibPajakController::class , 'update']);
Route::post('/wajibpajak/delete/{id}' , [\App\Http\Controllers\WajibPajakController::class , 'destroy']);

Route::post('/Ticketing/add' , [\App\Http\Controllers\TicketingController::class , 'store']);
Route::get('/Ticketing/read' , [\App\Http\Controllers\TicketingController::class , 'index']);
Route::get('/Ticketing/detail/{id}' , [\App\Http\Controllers\TicketingController::class , 'show']);
Route::post('/Ticketing/update/{id}' , [\App\Http\Controllers\TicketingController::class , 'update']);
Route::post('/Ticketing/delete/{id}' , [\App\Http\Controllers\TicketingController::class , 'destroy']);

Route::post('/Ketersediaan/add' , [\App\Http\Controllers\KetersediaanController::class , 'store']);
Route::get('/Ketersediaan/read' , [\App\Http\Controllers\KetersediaanController::class , 'index']);
Route::get('/Ketersediaan/detail/{id}' , [\App\Http\Controllers\KetersediaanController::class , 'show']);
Route::post('/Ketersediaan/update/{id}' , [\App\Http\Controllers\KetersediaanController::class , 'update']);
Route::post('/Ketersediaan/delete/{id}' , [\App\Http\Controllers\KetersediaanController::class , 'destroy']);

Route::post('/Pembelian/add' , [\App\Http\Controllers\PembelianController::class , 'store']);
Route::get('/Pembelian/read' , [\App\Http\Controllers\PembelianController::class , 'index']);
Route::get('/Pembelian/detail/{id}' , [\App\Http\Controllers\PembelianController::class , 'show']);
Route::post('/Pembelian/update/{id}' , [\App\Http\Controllers\PembelianController::class , 'update']);
Route::post('/Pembelian/delete/{id}' , [\App\Http\Controllers\PembelianController::class , 'destroy']);

Route::post('/maintenance/add' , [\App\Http\Controllers\MaintenanceController::class , 'store']);
Route::get('/maintenance/read' , [\App\Http\Controllers\MaintenanceController::class , 'index']);
Route::get('/maintenance/detail/{id}' , [\App\Http\Controllers\MaintenanceController::class , 'show']);
Route::post('/maintenance/update/{id}' , [\App\Http\Controllers\MaintenanceController::class , 'update']);
Route::post('/maintenance/delete/{id}' , [\App\Http\Controllers\MaintenanceController::class , 'destroy']);


// Route::resource('/device', DeviceController::class);
// Route::resource('/wajibpajak', WajibPajakController::class);
// Route::resource('/Ticketing', TicketingController::class);
// Route::resource('/Ketersediaan', KetersediaanController::class);
// Route::resource('/Pembelian', PembelianController::class);
// Route::resource('/maintenance', MaintenanceController::class);