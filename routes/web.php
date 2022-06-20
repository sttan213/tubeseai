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
    return view('home');
});

Route::get('datapemasanganalat', function () {
    return view('pasangalat');
});

Route::get('datamaintenance', function () {
    return view('maintenance');
});

Route::get('dataticketing', function () {
    return view('ticketing');
});

Route::get('dataketersediaan', function () {
    return view('ketersediaan');
});

Route::get('datapembelian', function () {
    return view('pembelian');
});