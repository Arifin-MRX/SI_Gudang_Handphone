<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama_pengguna' => 'Administrator',
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'alamat' => 'Jl. Raya Cibaduyut',
                'password' => bcrypt('123456'),
                'tlp' => '081234567890',
                'pegawai_id' => 1,
            ],
            [
                'nama_pengguna' => 'Pegawai',
                'email' => 'pegawai@gmail.com',
                'username' => 'Pegawai',
                'password' => bcrypt('123456'),
                'alamat' => 'Jl. Raya Cibaduyut',
                'tlp' => '081234567890',
                'pegawai_id' => 2,
            ],
            [
                'nama_pengguna' => 'Outlet',
                'email' => 'outlet@gmail.com',
                'username' => 'outlet',
                'password' => bcrypt('123456'),
                'alamat' => 'Jl. Raya Cibaduyut',
                'tlp' => '081234567890',
                'pegawai_id' => 3,
            ],
            [
                'nama_pengguna' => 'Supir',
                'email' => 'supir@gmail.com',
                'username' => 'Supir',
                'alamat' => 'Jl. Raya Cibaduyut',
                'password' => bcrypt('123456'),
                'tlp' => '081234567890',
                'pegawai_id' => 4,
            ]
        ]);
    }
}
