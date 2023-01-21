<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;

//Models
use App\Models\User;
use App\Models\karyawan;
use App\Models\Tamu;
use App\Models\kamar;
use App\Models\statusKamar;
use App\Models\jenisKamar;
use App\Models\Reservasi;
use App\Models\detail_Reservasi;
use App\Notifications\PembayaranNotification;

use Illuminate\Support\Facades\Notification;

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
        $data['kamars'] = kamar::all();
        return view('tamu.kamar')->with($data);
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


    public function profil()
    {

        $user = Auth::user();
        return view('tamu.profil', compact('user'));
    }
    public function pesanan()
    {
        $data['reservasi'] = Reservasi::all();
        return view('tamu.pesanan_tamu')->with($data);
    }

    public function update_pesanan(Request $request)
    {
        // dd($request->all());

        $reservasi = Reservasi::findOrFail($request->input('id_reservasi'));
        // dd($reservasi);
        $data['bukti_pembayaran'] = $request->file('bukti_pembayaran')->storeAs(
            'reservasi',
            'reservasi_' . $request->file('bukti_pembayaran')->getClientOriginalName() . '_' . time() . '.' . $request->file('bukti_pembayaran')->extension(),
            'public'
        );
        $update = $reservasi->update($data);
        $user = Auth::user();
        Notification::sendNow($user, new PembayaranNotification($user));
        return redirect()->route('tamu.pesanan');
        // $data['reservasi'] = Reservasi::all();
        // return view('tamu.pesanan_tamu')->with($data);
    }

    public function pesan_kamar($id)
    {
        $data['id_kamar'] = $id;
        return view('tamu.pesan_kamar')->with($data);
    }

    public function store_pesan(Request $request)
    {
        $id_user = Auth::user()->id;
        $id_tamu = Tamu::where('user_id', $id_user)->first()->id;
        $harga_kamar=Kamar::where('id', $request->get('kamar_id'))->first()->harga;
        $a = $request->get('tgl_masuk');
        $b = $request->get('tgl_keluar');
        // $harga = $request->
        // $selisih = $b->diff($a);
        $selisih = date_diff(date_create($b),date_create($a));

        $hari=$selisih->d;

        $bayar=$hari*$harga_kamar;

        // $bayar=$hari*

        $data = $request->all();
        $data['tamu_id'] = $id_tamu;
        $data['lama_menginap'] = $hari;
        $data['total_pembayaran'] = $bayar;
        Reservasi::create($data);
        return redirect()->route('tamu.kamar');
    }
}
