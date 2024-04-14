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
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita"
    ]);
});
Route::get('/berita-details', function () {
    return view('berita-details', [
        "title" => "Berita-Details"
    ]);
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/kuliner', function () {
    return view('kuliner');
});
Route::get('/wisata', function () {
    return view('wisata');
});
Route::get('/portfolio', function () {
    return view('portfolio-details');
});
Route::get('/pemandu', function () {
    return view('pemandu', [
        "title" => "Pemandu Wisata"
    ]);
});
Route::get('/penerbangan', function () {
    return view('penerbangan', [
        "title" => "Informasi Umum | Penerbangan"
    ]);
});
