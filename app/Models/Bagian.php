<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_bagian',
        'kuota'
    ];

    public function pendaftar(){
        return $this->belongsTo(Pendaftar::class);
    }
}
