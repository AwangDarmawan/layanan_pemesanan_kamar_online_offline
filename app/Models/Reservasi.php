<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $fillable = [
        'tamu_id',
        'kamar_id',
        'tgl_masuk',
        'tgl_keluar',
        'jumlah_hari',
        'bukti_pembayaran'
    ];
    use HasFactory;
    public function tamu(){
        return $this->belongsTo(tamu::class, 'tamu_id', 'id');
    }
    // public function karyawan(){
    //     return $this->belongsTo(kariawan::class, 'karyawan_id', 'id');
    // }
    public function kamar(){
        return $this->belongsTo(kamar::class, 'kamar_id', 'id');
    }

   
}
