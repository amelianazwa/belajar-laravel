<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mereks = [
            ['nama_merek'=>'Nike'],
            ['nama_merek'=>'Adidas'],
            ['nama_merek'=>'Jordan']
            ];
             // masukkan data ke database
             DB::table('mereks')->insert($mereks);
    }
}
