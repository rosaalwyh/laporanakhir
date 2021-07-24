<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => '1',
                'password' => bcrypt('admin')
            ],
            [
                'username' => 'rosaalwyh',
                'email' => 'alawiyahrosa@gmail.com',
                'role' => '2',
                'password' => bcrypt('12345')
            ],
            [
                'username' => 'umurida',
                'email' => 'umurida@gmail.com',
                'role' => '3',
                'password' => bcrypt('12345')
            ],
            [
                'username' => 'lena',
                'email' => 'lena@gmail.com',
                'role' => '4',
                'password' => bcrypt('12345')
            ],
            [
                'username' => 'pimpinan',
                'email' => 'pimpinan@gmail.com',
                'role' => '5',
                'password' => bcrypt('12345')
            ],
            [
                'username' => 'inipimpinan',
                'email' => 'inipimpinan@gmail.com',
                'role' => '5',
                'password' => bcrypt('12345')
            ]
        ];
        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
