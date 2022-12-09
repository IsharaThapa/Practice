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
    return view('contactform');
});
Route::get('/copy', function () {
    return view('navbar');
});
Route::get('/car', function () {
    return view('carousel');
});
Route::get('/cards', function () {
    return view('cards');
});

