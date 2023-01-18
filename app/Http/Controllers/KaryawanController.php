<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

//Models
use App\Models\User;
use App\Models\karyawan;
use App\Models\Tamu;
use App\Models\kamar;
use App\Models\statusKamar;
use App\Models\jenisKamar;
use App\Models\Reservasi;
use App\Models\detail_Reservasi;


class KaryawanController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

   
   

    //CRUD controller
    public function user(){
        $user = Auth::user();
        $data['karyawans'] = karyawan::all();
        $data['tamus'] = Tamu::all();
        return view('karyawan.user', compact('user','data'))->with($data);
    }

    public function kamar(){
        $user = Auth::user();
        $data['kamars'] = kamar::all();
        return view('karyawan.kamar', compact('user','data'))->with($data);
    }

    public function tertunda(){
        $user = Auth::user();
        $data['reservasis'] = Reservasi::all();
        return view('karyawan.tertunda', compact('user','data'))->with($data);
    }
}
