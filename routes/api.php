<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hotels', 'App\Http\Controllers\api\HotelController@index');
Route::post('/hotel', 'App\Http\Controllers\api\HotelController@store');
Route::get('hotel/{hotel}', 'App\Http\Controllers\api\HotelController@show');
Route::put('hotel/{hotel}', 'App\Http\Controllers\api\HotelController@update');
Route::delete('hotel/{hotel}', 'App\Http\Controllers\api\HotelController@destroy');

Route::post('hotel/asignacion','App\Http\Controllers\api\HotelController@attach');
