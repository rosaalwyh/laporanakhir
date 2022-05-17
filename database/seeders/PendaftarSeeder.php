<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\App;

class PendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pendaftar = [
            [
                'nama_lengkap' => 'Rosa Alawiyah',
                'user_id' => 2,
                'bagian_id' => 1,
                'nim' => '06183080',
                'tanggal_lahir' => '1999-09-29',
                'jenis_kelamin' => 'Perempuan',
                'asal_kampus' => 'Politeknik Negeri Kesehatan Palembang',
                'jurusan' => 'Kesehatan Gigi'
            ],
            [
                'nama_lengkap' => 'Muhammad Yusron Hartoyo',
                'nim' => '06193081',
                'bagian_id' =>2,
                'tanggal_lahir' => '1997-07-17',
                'jenis_kelamin' => 'Laki-laki',
                'asal_kampus' => 'Politeknik Negeri Kesehatan Palembang',
                'jurusan' => 'Kesehatan Masyarakat'
            ]
        ];
        foreach($pendaftar as $key => $value){
            Pendaftar::create($value);
        }
    }
}
