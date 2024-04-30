<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama'=>'Baskom', 'jumlah'=>30],
            ['nama'=>'Gayung', 'jumlah'=>20],
            ['nama'=>'Panci', 'jumlah'=>10]
            ];
            // masukkan data ke database
            DB::table('barangs')->insert($barangs);
            }
    }
