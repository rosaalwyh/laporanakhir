<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSeminar extends Model
{
    use HasFactory;
    protected $table = [
        'peserta_id',
        'pre_test',
        'post_test',
        'total_nilai'
    ];
}
