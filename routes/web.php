<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('page/home', [
        "title" => "Home"
    ]);
});
Route::get('/berita', function () {
    return view('page/berita', [
        "title" => "Berita"
    ]);
});
Route::get('/berita-details', function () {
    return view('page/berita-details', [
        "title" => "Berita-Details"
    ]);
});
Route::get('/event', function () {
    return view('page/event');
});
Route::get('/kuliner', function () {
    return view('page/kuliner', [
        "title" => "Kuliner"
    ]);
});
Route::get('/wisata', function () {
    return view('page/wisata');
});
Route::get('/portfolio', function () {
    return view('page/portfolio-details');
});
Route::get('/pemandu', function () {
    return view('pemandu', [
        "title" => "page/Pemandu Wisata"
    ]);
});
Route::get('/penerbangan', function () {
    return view('page/penerbangan', [
        "title" => "Penerbangan"
    ]);
});
Route::get('/informasiumum', function () {
    return view('page/informasiumum', [
        "title" => "Informasi Umum"
    ]);
});

Route::get('/travelagency', function () {
    return view('page/travelagency', [
        "title" => "Travel Agency"
    ]);
});




Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


