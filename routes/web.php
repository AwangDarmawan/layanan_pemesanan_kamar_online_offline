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




//tamu Route
Route::get('tamu/home',[App\Http\Controllers\HomeController::class, 'home'])->name('home')->middleware('auth');
Route::get('tamu/kamar',[App\Http\Controllers\HomeController::class, 'kamar'])->name('tamu.kamar')->middleware('auth');
Route::get('tamu/tentang',[App\Http\Controllers\HomeController::class, 'tentang'])->name('tamu.tentang')->middleware('auth');
Route::get('tamu/kontak',[App\Http\Controllers\HomeController::class, 'kontak'])->name('tamu.kontak')->middleware('auth');
Route::get('tamu/kamar/pesan',[App\Http\Controllers\HomeController::class, 'pesan_kamar'])->name('tamu.pesan')->middleware('auth');
Route::get('tamu/profil',[App\Http\Controllers\HomeController::class, 'profil'])->name('tamu.profil')->middleware('auth');
Route::get('tamu/pesanan',[App\Http\Controllers\HomeController::class, 'pesanan'])->name('tamu.pesanan')->middleware('auth');