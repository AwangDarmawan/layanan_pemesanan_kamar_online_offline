<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

//akses admin home
Route::get('karyawan/home', [App\Http\Controllers\HomeController::class, 'dashboard'])
->name('karyawan.home')
->middleware('karyawan');

Route::get('karyawan/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])
->name('karyawan.dashboard')
->middleware('karyawan');

Route::get('karyawan/pengguna', [KaryawanController::class, 'user'])
->name('karyawan.pengguna')
->middleware('karyawan');

Route::get('karyawan/kamar', [KaryawanController::class, 'kamar'])
->name('karyawan.kamar')
->middleware('karyawan');

Route::get('karyawan/tertunda', [KaryawanController::class, 'tertunda'])
->name('karyawan.tertunda')
->middleware('karyawan');

Route::get('karyawan/konfirmasi', [App\Http\Controllers\HomeController::class, 'konfirmasi'])
->name('karyawan.konfirmasi')
->middleware('karyawan');

Route::get('karyawan/laporan', [App\Http\Controllers\HomeController::class, 'laporan'])
->name('karyawan.laporan')
->middleware('karyawan');

Route::get('karyawan/reservasi', function () {
    return view('karyawan/reservasi');
})->name('karyawan.reservasi');

Route::get('karyawan/profile', [App\Http\Controllers\HomeController::class, 'profile'])
->name('karyawan.profile')
->middleware('karyawan');

//Route CRUD
// Route::get('karyawan/getPengguna', [App\Http\Controllers\KaryawanController::class, 'user'])
// ->name('karyawan.user')
// ->middleware('karyawan');
//logout
// Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'destroy'])->name('logout')->middleware('auth');