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

    public function home()
    {
        
        $user = Auth::user();
        return view('tamu.home', compact('user'));
    }
    public function kamar()
    {
        
        $user = Auth::user();
        return view('tamu.kamar', compact('user'));
    }
    public function tentang()
    {
        
        $user = Auth::user();
        return view('tamu.tentang', compact('user'));
    }
    public function kontak()
    {
        
        $user = Auth::user();
        return view('tamu.kontak', compact('user'));
    }
    
    public function pesan_kamar()
    {
        
        $user = Auth::user();
        return view('tamu.pesan_kamar', compact('user'));
    }
    public function profil()
    {
        
        $user = Auth::user();
        return view('tamu.profil', compact('user'));
    }
    public function pesanan()
    {
        
        $user = Auth::user();
        return view('tamu.pesanan_tamu', compact('user'));
    }
}
