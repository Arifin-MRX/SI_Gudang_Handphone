<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //data faker untuk kategori handphone
         $faker = Faker::create('id_ID');
         for ($i = 1; $i <= 10; $i++) {
             DB::table('gudangs')->insert([
                 'nama_gudang' => $faker->name,
                 'alamat' => $faker->address,
                 'created_at' => now(),
                 'updated_at' => now(),
             ]);
         }
    }
}
