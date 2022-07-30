<?php

use App\Http\Controllers\SurveiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengawasController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('layouts.landingPage');
});

// Route::get('/register', function () {
//     return view('register');
// });

Auth::routes();
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/tentang', [\App\Http\Controllers\TentangController::class, 'index'])->name('tentang');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::resource('form',  SurveiController::class);
Route::get('inputForm', function () {
    return view('form.inputForm');
});

Route::resource('petugas', PetugasController::class);
Route::get('inputPetugas', function () {
    return view('petugas.create');
});

Route::resource('pengawas', PengawasController::class);
Route::get('inputPengawas', function () {
    return view('pengawas.create');
});