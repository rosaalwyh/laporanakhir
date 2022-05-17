<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pendaftar_id',
        'bagian_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'status'
    ];
}
