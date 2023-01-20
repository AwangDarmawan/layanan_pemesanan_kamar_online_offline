<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_Reservasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode-reservasi',
        'lama_menginap',
        'total_bayar',
        'tamu_id',
        'kamar_id',
        'tgl_masuk',
        'tgl_keluar',
        'bukti_pembayaran',

    ];
    public function reservasi(){
        return $this->belongsTo(reservasi::class, 'kode_reservasi', 'id');
    }
}
