<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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


class KaryawanController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

   
    public function dashboard(){
        $user = Auth::user();
        $data['kamars'] = kamar::all();
        return view('karyawan.dashboard', compact('user','data'))->with($data);
    }

    //CRUD controller
    //PENGGUNA
    public function user(){
        $user = Auth::user();
        $data['karyawans'] = karyawan::all();
        $data['tamus'] = Tamu::all();
        return view('karyawan.user', compact('user','data'))->with($data);
    }

    // //tambah pengguna
    // public function tambah_pengguna(Request $req){
    //     $validate = $req->validate([
    //         'email' => 'required|max:255',
    //         'username' => 'required',
    //         'password' => 'required',
    //         'name' => 'required',
    //         'alamat' => 'required',
    //         'jenis_kelamin' => 'required',
    //         'no_hp' => 'required',
    //     ]);

    //     $data = new data;

    //     $data->email = $req->get('email');
    //     $data->username = $req->get('username');
    //     $data->password = $req->get('password');
    //     $data->name = $req->get('name');

    //     if($req->hasFile('foto')){
    //         $extension = $req->file('foto')->extension();
    //         $filename = 'foto_'.time().'.'.$extension;
    //         $req->file('foto')->storeAs(
    //             'public/img', $filename
    //         );

    //         $data->foto = $filename;
    //     }

    //     $data->save();

    //     $notification = array(
    //         'message' => 'Data buku berhasil ditambah',
    //         'alert-type' => 'success'
    //     );

    //     return redirect()->route('karyawan.pengguna')->with($notification);
    // }

     //hapus user
     public function hapus_user($id)
     {
         tamu::destroy($id);
 
         //isi alert
 
         Session::flash('status', 'Hapus data berhasil!!!');
         return redirect()->back();
     }
 
    
    //KAMAR
    public function kamar(){
        $user = Auth::user();
        $data['kamars'] = kamar::all();
        
        return view('karyawan.kamar', compact('user','data'))->with($data);
    }

   //tambah kamar
    public function tambah_kamar(Request $req){
        // $mess = [
        //     'required' => ':attribute wajib diisi!!!',
        //     'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
        //     'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
        // ];

        $validated = $req->validate([
            'no_kamar' => 'required',
            'jenis_kamar_id' => 'required',
            'harga' => 'required|min:5',
            'deskripsi' => 'required|max:20',
            'foto_kamar' => 'required|image',
            'foto_wc' => 'required|image',
            

        ]);

        $data = new kamar;

        $data->no_kamar = $req->get('no_kamar');
        $data->jenis_kamar_id = $req->get('jenis_kamar_id');
        $data->harga = $req->get('harga');
        $data->deskripsi = $req->get('deskripsi');

        if($req->file('foto_kamar')){
            $extension = $req->file('foto_kamar')->extension();
            $filename = 'foto_kamar_'.time().'.'.$extension;
            $req->file('foto_kamar')->storeAs(
                'public/img', $filename
            );

            $data->foto_kamar = $filename;
        }
        if($req->file('foto_wc')){
            $extension = $req->file('foto_wc')->extension();
            $filename = 'foto_wc_'.time().'.'.$extension;
            $req->file('foto_wc')->storeAs(
                'public/img', $filename
            );

            $data->foto_wc = $filename;
        }
        if($req->file('foto_ruangan')){
            $extension = $req->file('foto_ruangan')->extension();
            $filename = 'foto_ruangan_'.time().'.'.$extension;
            $req->file('foto_ruangan')->storeAs(
                'public/img', $filename
            );

            $data->foto_ruangan = $filename;
        }

        $data->save();

        //isi alert

        
        Session::flash('status', 'Tambah Data berhasil!!!');
        return redirect()->route('karyawan.kamar');
    }

    //edit kamar
        //get data
        public function getDataKamar($id){
            $kamar = kamar::find($id);
            return response()->json($kamar);
            // $data['kamar'] = kamar::find($id);
        }

        //edit kamar function
        public function edit_kamar(Request $req){

            // $messages = [
            //     'required' => ':attribute wajib diisi!!!',
            //     'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            //     'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
            // ];
    
            $validated = $req->validate([
                'no_kamar' => 'required',
                'jenis_kamar_id' => 'required',
                'harga' => 'required|min:5',
                'deskripsi' => 'required|max20',
                'foto_kamar' => 'required|image',
                'foto_wc' => 'required|image',
            ]);

            $data = kamar::find($req->input('id_kamar'));
            $data->no_kamar = $req->input('no_kamar');
            $data->jenis_kamar_id = $req->input('jenis_kamar_id');
            $data->harga = $req->input('harga');
            $data->deskripsi = $req->input('deskripsi');
            
            if($req->file('foto_kamar')){
                $extension = $req->file('foto_kamar')->extension();
                $filename = 'foto_kamar_'.time().'.'.$extension;
                $req->file('foto_kamar')->storeAs(
                    'public/img', $filename
                );
    
                Storage::delete('public/img/'.$req->input('old_foto_kamar'));
                $data->foto_kamar = $filename;
            }
            if($req->file('foto_wc')){
                $extension = $req->file('foto_wc')->extension();
                $filename = 'foto_wc_'.time().'.'.$extension;
                $req->file('foto_wc')->storeAs(
                    'public/img', $filename
                );
    
                Storage::delete('public/img/'.$req->input('old_foto_wc'));
                $data->foto_wc = $filename;
            }
            if($req->file('foto_ruangan')){
                $extension = $req->file('foto_ruangan')->extension();
                $filename = 'foto_ruangan_'.time().'.'.$extension;
                $req->file('foto_ruangan')->storeAs(
                    'public/img', $filename
                );
    
                Storage::delete('public/img/'.$req->input('old_foto_ruangan'));
                $data->foto_ruangan = $filename;
            }

    
            $data->save();
           
            Session::flash('status', 'Edit Data Berhasil!!!');
            return redirect()->route('karyawan.kamar');
    
    
        }
    
    
    //hapus kamar
    public function hapus_kamar($id)
    {
        kamar::destroy($id);

        //isi alert

        Session::flash('status', 'Hapus data berhasil!!!');
        return redirect()->back();
    }


    //RESERVASI
    public function tertunda(){
        $user = Auth::user();
        $data['reservasis'] = Reservasi::all();
        return view('karyawan.tertunda', compact('user','data'))->with($data);
    }

    public function konfirmasi(){
        $user = Auth::user();
        $data['reservasis'] = Reservasi::all();
        return view('karyawan.konfirmasi', compact('user','data'))->with($data);
    }

    public function laporan(){
        $user = Auth::user();
        $data['reservasis'] = Reservasi::all();
        return view('karyawan.laporan', compact('user','data'))->with($data);
    }

    public function profile(){
        $user = Auth::user();
        $data['karyawans'] = karyawan::all();
        return view('karyawan.profile', compact('user','data'))->with($data);
    }


}
