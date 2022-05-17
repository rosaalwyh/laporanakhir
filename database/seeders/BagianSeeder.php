<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bagian;

class BagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bagian = [
            [
                'nama_bagian' => 'Ruang Kebidanan',
                'kuota' => '15'
            ],
            [
                'nama_bagian' => 'Ruang Zal Wanita',
                'kuota' => '10'
            ],
            [
                'nama_bagian' => 'Ruang Zal Laki',
                'kuota' => '15'
            ],
            [
                'nama_bagian' => 'Ruang Zal Anak',
                'kuota' => '15'
            ],
            [
                'nama_bagian' => 'Ruang UGD',
                'kuota' => '10'
            ],
            [
                'nama_bagian' => 'Poliklinik KIA',
                'kuota' => '5'
            ],
            [
                'nama_bagian' => 'Poliklinik Gigi',
                'kuota' => '10'
            ],
        ];
        foreach($bagian as $key => $value){
            Bagian::create($value);
        }
    }
}
