<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'Nike1999', 'jumlah' => 10, 'tangal_produksi' => '2024-10-01', 'id_mereks' => 1],
            ['nama_produk' => 'Nike2020', 'jumlah' =>20, 'tangal_produksi' => '2024-07-07', 'id_mereks' => 1],
            ['nama_produk' => 'Adidas1899', 'jumlah' => 30, 'tangal_produksi' => '2024-06-01', 'id_mereks' => 2],
            ['nama_produk' => 'Adidas9076', 'jumlah' => 40, 'tangal_produksi' => '2024-09-08', 'id_mereks' => 2],
            ['nama_produk' => 'AirJordan809', 'jumlah' =>50, 'tangal_produksi' => '2024-08-09', 'id_mereks' => 3],
            ['nama_produk' => 'AirJordan1200', 'jumlah' => 30, 'tangal_produksi' => '2024-06-08', 'id_mereks' => 3],
                ];
        DB::table('produks')->insert($produks);
    }
}
