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
