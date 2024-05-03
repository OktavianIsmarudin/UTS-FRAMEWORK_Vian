<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'kode' => 'Gr',
                'nama' => 'Gram',
                'deskripsi' => 'baik'
            ],
            [
                'kode' => 'KG',
                'nama' => 'KiloGram',
                'deskripsi' => 'buruk'
            ],
            [
                'kode' => 'Ltr',
                'nama' => 'Liter',
                'deskripsi' => 'rusak'
            ],
        ]);
    }
}
