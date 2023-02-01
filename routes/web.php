<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;

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
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

// data

route::get('/data', [AbsenController::class, 'index']);
route::get('/detail/{id}', [AbsenController::class, 'detail']);
route::get('/daftar', [AbsenController::class, 'daftar']);
route::post('/create', [AbsenController::class, 'create']);
route::delete('/delete/{id}', [AbsenController::class, 'delete']);
route::get('/edit/{id}', [AbsenController::class, 'edit']);
route::put('/update/{id}', [AbsenController::class, 'update']);
