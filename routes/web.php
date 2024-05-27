<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\VideoController;
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

// Action
Route::post('/konvertaudio/action', [VideoController::class, 'convert'])->name('convert.video');
Route::post('/komprespdf/action', [PdfController::class, 'convert'])->name('compress.pdf');
Route::post('/komprespng/action', [ImageController::class, 'convert'])->name('compress.image');
