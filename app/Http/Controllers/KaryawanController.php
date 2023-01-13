<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

   
    public function index(){
        $user = Auth::user();
        return view('karyawan.dashboard', compact('user'));
    }

    public function pengguna(){
        $user = Auth::user();
        return view('karyawan.user', compact('user'));
    }

    public function kamar(){
        $user = Auth::user();
        return view('karyawan.kamar', compact('user'));
    }

    public function tertunda(){
        $user = Auth::user();
        return view('karyawan.tertunda', compact('user'));
    }

    public function konfirmasi(){
        $user = Auth::user();
        return view('karyawan.konfirmasi', compact('user'));
    }

    public function laporan(){
        $user = Auth::user();
        return view('karyawan.laporan', compact('user'));
    }

    public function profile(){
        $user = Auth::user();
        return view('karyawan.profile', compact('user'));
    }
}
