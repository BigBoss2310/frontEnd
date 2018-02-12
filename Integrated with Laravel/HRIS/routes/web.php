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
    return view('login');
});

Route::get('/indexHR', function () {
    return view('indexHR');
});

Route::get('/employee', function () {
    return view('/HR/employee');
});

Route::get('/pendingleave', function () {
    return view('/HR/pendingleave');
});

Route::get('/report', function () {
    return view('/HR/report');
});

Route::get('/plantilla', function () {
    return view('/HR/plantilla');
});

Route::get('/form', function () {
    return view('/HR/form');
});
