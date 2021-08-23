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

Route::get('/', 'App\Http\Controllers\UserController@home');
Route::get('/covid', 'App\Http\Controllers\UserController@covid');
Route::get('/rumahsakit', 'App\Http\Controllers\UserController@rumahsakit');
Route::get('/tentangkami', 'App\Http\Controllers\UserController@tentangkami');


