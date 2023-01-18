<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    public function tamu(){
        return $this->belongsTo(tamu::class, 'tamu_id', 'id');
    }
    public function karyawan(){
        return $this->belongsTo(kariawan::class, 'karyawan_id', 'id');
    }
    public function kamar(){
        return $this->belongsTo(tamu::class, 'kamar_id', 'id');
    }
}
