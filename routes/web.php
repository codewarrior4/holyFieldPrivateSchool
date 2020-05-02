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
    return view('index');
});

Route::resource('/index','indexController');
Route::resource('/contact','contactController');
Route::resource('/about','aboutController');
Route::resource('/admission','admission');
Route::resource('/blog','blogController');
Route::resource('/event','eventController');
Route::resource('/gallery','galleryController');
Route::resource('/teacher','teachersController');
