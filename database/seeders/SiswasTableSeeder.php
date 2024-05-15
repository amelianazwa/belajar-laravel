<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama'=>'Nazwa', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Cibogo', 'agama'=>'Islam', 'telepon'=>89111, 'email'=>'nazwa@gmail.com'],
            ['nama'=>'Felisa', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Cibogo', 'agama'=>'Islam', 'telepon'=>89222, 'email'=>'felisa@gmail.com'],
            ['nama'=>'Sindi', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Tci', 'agama'=>'Islam', 'telepon'=>89333, 'email'=>'sindi@gmail.com'],
            ['nama'=>'Aisha', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Kopo', 'agama'=>'Islam', 'telepon'=>89444, 'email'=>'aisha@gmail.com'],
            ['nama'=>'Silva', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Kopo', 'agama'=>'Islam', 'telepon'=>89555, 'email'=>'silva@gmail.com'],
            ['nama'=>'Riska', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Tarate', 'agama'=>'Islam', 'telepon'=>89666, 'email'=>'riska@gmail.com'],
            ['nama'=>'Nashwa', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Tci', 'agama'=>'Islam', 'telepon'=>89777, 'email'=>'nashwa@gmail.com'],
            ['nama'=>'Zahira', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Cibaduyut', 'agama'=>'Islam', 'telepon'=>89888, 'email'=>'zahira@gmail.com'],
            ['nama'=>'Kayla', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Tci', 'agama'=>'Islam', 'telepon'=>89999, 'email'=>'kayla@gmail.com'],
            ['nama'=>'Aliifah', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Rancamanyar', 'Agama'=>'Islam', 'telepon'=>89101010, 'email'=>'aliifah@gmail.com'],
        ];
            // masukkan data ke database
            DB::table('siswas')->insert($siswas);
            }
    }

