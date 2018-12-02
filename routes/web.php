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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::get('/status', function () {
    return view('status');
});
Route::get('/pengajuan', function () {
    return view('pengajuan');
});
Route::get('/home1', function () {
    return view('home1');
});
Route::get('/home2', function () {
    return view('home2');
});
Route::get('/tabel1', function () {
    return view('tabel1');
});
Route::get('/tabel2', function () {
    return view('tabel2');
});

