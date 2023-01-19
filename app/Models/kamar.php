<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'no_kamar',
        'jenis_kamar_id',
        'harga',
        'deskripsi',
        
    ];

    public function jenisKamar(){
        return $this->belongsTo(jenisKamar::class, 'jenis_kamar_id', 'id');
    }
    public function statusKamar(){
        return $this->belongsTo(statusKamar::class, 'status_id', 'id');
    }
}
