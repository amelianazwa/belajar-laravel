<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli'=>'Nazwa', 'jenis_kelamin'=>'Perempuan'],
            ['nama_pembeli'=>'Felisa', 'jenis_kelamin'=>'Perempuan'],
            ['nama_pembeli'=>'Sindy', 'jenis_kelamin'=>'Perempuan']
            ];

            DB::table('pembelis')->insert($pembelis);
    }
}
