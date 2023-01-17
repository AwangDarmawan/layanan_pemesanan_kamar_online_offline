<?php

use Illuminate\Support\Facades\Route;

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
Route::get('karyawan/home', [App\Http\Controllers\KaryawanController::class, 'index'])
->name('karyawan.home')
->middleware('karyawan');

// Route::get('dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('karyawan/dashboard', [App\Http\Controllers\KaryawanController::class, 'index'])
->name('karyawan.dashboard')
->middleware('karyawan');

Route::get('karyawan/pengguna', [App\Http\Controllers\KaryawanController::class, 'pengguna'])
->name('karyawan.pengguna')
->middleware('karyawan');

Route::get('karyawan/kamar', [App\Http\Controllers\KaryawanController::class, 'kamar'])
->name('karyawan.kamar')
->middleware('karyawan');

Route::get('karyawan/tertunda', [App\Http\Controllers\KaryawanController::class, 'tertunda'])
->name('karyawan.tertunda')
->middleware('karyawan');

Route::get('karyawan/konfirmasi', [App\Http\Controllers\KaryawanController::class, 'konfirmasi'])
->name('karyawan.konfirmasi')
->middleware('karyawan');

Route::get('karyawan/laporan', [App\Http\Controllers\KaryawanController::class, 'laporan'])
->name('karyawan.laporan')
->middleware('karyawan');

Route::get('karyawan/reservasi', function () {
    return view('karyawan/reservasi');
})->name('karyawan.reservasi');

Route::get('karyawan/profile', [App\Http\Controllers\KaryawanController::class, 'profile'])
->name('karyawan.profile')
->middleware('karyawan');

//logout
// Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'destroy'])->name('logout')->middleware('auth');