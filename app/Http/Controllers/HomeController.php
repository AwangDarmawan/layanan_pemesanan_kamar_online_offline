<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $user = Auth::user();
        return view('home', compact('user'));
    }

    //Karyawan
    public function dashboard(){
        $user = Auth::user();
        return view('karyawan.dashboard', compact('user'));
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
