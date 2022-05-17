<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
Use App\Models\Bagian;


class Pendaftar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'nim',
        'tanggal_lahir',
        'jenis_kelamin',
        'asal_kampus',
        'jurusan',
        'bagian_id',
        'user_id',
        'proposal',
        'ktm',
        'surat_pengantar',
        'status'
    ];

    public function bagian(){
        return $this->hasOne(Bagian::class);
    }
}
