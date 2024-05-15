<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
            ['nomor_telepon' => '08111', 'pengguna_id' => 1],
            ['nomor_telepon' => '08222', 'pengguna_id' => 2],
            ['nomor_telepon' => '08333', 'pengguna_id' => 3],
        ];
        DB::table('telepons')->insert($telepons);
    }
}
