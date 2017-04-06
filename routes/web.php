<?php

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

Route::get('/khach-san', function () {
    return view('khach-san');
});

Route::get('/khach-san/chi-tiet', function () {
    return view('chi-tiet');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
