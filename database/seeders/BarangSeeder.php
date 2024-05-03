<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kodeBarang' => 'A1',
                'namaBarang' => 'Gula',
                'hargaBarang'=> 15000,
                'deskripsiBarang' => 'hanya kiloan',
                'satuans_id' => 1,

            ],
            [
                'kodeBarang' => 'A2',
                'namaBarang' => 'Minyak',
                'hargaBarang'=> 20000,
                'deskripsiBarang' => 'Minyak Merah',
                'satuans_id' => 2

            ],
            [
                'kodeBarang' => 'A3',
                'namaBarang' => 'Karet',
                'hargaBarang'=> 100,
                'deskripsiBarang' => 'karet bundar',
                'satuans_id' => 3

            ],
        ]);
    }
}


