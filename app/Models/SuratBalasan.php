<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratBalasan extends Model
{
    use HasFactory;
    protected $table = 'surat_balasans';
    protected $fillable = [
        'pendaftar_id',
        'no_surat_balasan',
        'surat_balasan'
    ];

}
