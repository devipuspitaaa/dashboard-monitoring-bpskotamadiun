<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurveiController;
use App\Http\Controllers\PengawasController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TargetController;
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
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/home", [HomeController::class, 'index'])->name("home");

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::resource('form',  SurveiController::class);
Route::get('inputForm', [App\Http\Controllers\SurveiController::class, 'create'])->name('inputForm');

/** Petugas */
Route::resource('petugas', PetugasController::class);
Route::post("petugas/update/{id}", [PetugasController::class, 'update']);
Route::get('inputPetugas', [App\Http\Controllers\PetugasController::class, 'create'])->name('inputPetugas');
Route::get('petugas/hapus/{id}', [PetugasController::class, 'destroy']);
/** End : Module Petugas */

/** Petugas */
Route::resource('pengawas', PengawasController::class);
Route::post("pengawas/update/{id}", [PengawasController::class, 'update']);
Route::get('inputPengawas', [App\Http\Controllers\PengawasController::class, 'create'])->name('inputPengawas');
/** End : Module Petugas */


/** Target */
Route::resource('target', TargetController::class);
Route::post("target/update/{id}", [TargetController::class, 'update']);
Route::get('inputTarget', [App\Http\Controllers\TargetController::class, 'create'])->name('inputTarget');

/** End : Module Target */

Route::get('inputForm', function () { return view('inputForm'); })->middleware('checkRole:admin');
Route::get('inputPetugas', function () { return view('inputPetugas'); })->middleware('checkRole:admin');
Route::get('inputPengawas', function () { return view('inputPengawas'); })->middleware('checkRole:admin');
Route::get('inputTarget', function () { return view('inputTarget'); })->middleware(['checkRole:pengawas,admin']);
Route::get('dashboard', function () { return view('dashboard'); })->middleware(['checkRole:lurah,admin']);
