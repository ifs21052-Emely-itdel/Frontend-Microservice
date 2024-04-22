<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/home', function () {
    return view('home');
})->name("home");


Route::get('/komprespdf', function () {
    return view('komprespdf');
})->name('komprespdf');

Route::get('/komprespng', function () {
    return view('komprespng');
})->name('komprespng');

Route::get('/konvertaudio', function () {
    return view('konvertaudio');
})->name('konvertaudio');
