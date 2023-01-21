<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $fillable = [
        'name',
        'alamat',
        'jenis_kelamin',
        'no_hp',
        'foto',
        'user_id',
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
}
