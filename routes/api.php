<?php

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

Route::get('/device/getValue/{deviceId}','App\Http\Controllers\DeviceController@getValue');
Route::post('/device/setValue/{deviceId}','App\Http\Controllers\DeviceController@setValue');
Route::post('/device/create','App\Http\Controllers\DeviceController@create');