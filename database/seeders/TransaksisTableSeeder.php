<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis =  [
            ['id_barang2s' => 1, 'id_pembeli' => 1, 'jumlah' => 60, 'tanggal' => '2024-01-01'],
            ['id_barang2s' => 1, 'id_pembeli' => 1, 'jumlah' => 50, 'tanggal' => '2024-02-02'],
            ['id_barang2s' => 2, 'id_pembeli' => 2, 'jumlah' => 40, 'tanggal' => '2024-03-03'],
            ['id_barang2s' => 2, 'id_pembeli' => 2, 'jumlah' => 30, 'tanggal' => '2024-04-04'],
            ['id_barang2s' => 3, 'id_pembeli' => 3, 'jumlah' => 20, 'tanggal' => '2024-05-05'],
            ['id_barang2s' => 3, 'id_pembeli' => 3, 'jumlah' => 10, 'tanggal' => '2024-06-06'],
        ];
        DB::table('transaksis')->insert($transaksis);
    }
}
