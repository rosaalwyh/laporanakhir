<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diklat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'nip',
        'jenis_kelamin',
        'tanggal_lahir',
    ];
}
