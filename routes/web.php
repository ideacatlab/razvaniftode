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
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/FP-C01', function () {
    return view('FP-C01');
});

Route::get('/FP-F01', function () {
    return view('FP-F01');
});

Route::get('/HP-G01', function () {
    return view('HP-G01');
});

Route::get('/HP-G02', function () {
    return view('HP-G02');
});


Route::get('/HP-I01', function () {
    return view('HP-I01');
});


Route::get('/HP-T01', function () {
    return view('HP-T01');
});

Route::get('/PP-C01', function () {
    return view('PP-C01');
});

Route::get('/FP-A01', function () {
    return view('FP-A01');
});

Route::get('/FP-C02', function () {
    return view('FP-C02');
});

Route::get('/BP-N01', function () {
    return view('BP-N01');
});

Route::get('/CP-U01', function () {
    return view('CP-U01');
});

Route::get('/FP-M01', function () {
    return view('FP-M01');
});

Route::get('/FP-M02', function () {
    return view('FP-M02');
});

Route::get('/FP-M03', function () {
    return view('FP-M03');
});

Route::get('/FP-P01', function () {
    return view('FP-P01');
});

Route::get('/FP-R01', function () {
    return view('FP-R01');
});

Route::get('/HP-B01', function () {
    return view('HP-B01');
});

Route::get('/HP-C01', function () {
    return view('HP-C01');
});

Route::get('/HP-M01', function () {
    return view('HP-M01');
});

Route::get('/HP-P01', function () {
    return view('HP-P01');
});

Route::get('/HP-P02', function () {
    return view('HP-P02');
});

Route::get('/HP-T01', function () {
    return view('HP-T01');
});

Route::get('/HP-T02', function () {
    return view('HP-T02');
});

Route::get('/HP-T03', function () {
    return view('HP-T03');
});

Route::get('/MP-V01', function () {
    return view('MP-V01');
});

Route::get('/OP-B01', function () {
    return view('OP-B01');
});

Route::get('/PP-A01', function () {
    return view('PP-A01');
});

Route::get('/PS-ARTHUB', function () {
    return view('PS-ARTHUB');
});
