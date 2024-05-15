<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['nama_barang'=>'Earphone', 'harga'=>40000, 'stok'=>10],
            ['nama_barang'=>'Casing', 'harga'=>30000, 'stok'=>20],
          ['nama_barang'=>'Charger', 'harga'=>50000, 'stok'=>30]
            ];

            DB::table('barang2s')->insert($barang2s);
    }
}
