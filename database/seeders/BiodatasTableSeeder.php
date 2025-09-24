<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        DB::table('Biodatas')->delete();
        DB::table('Biodatas')->insert([
            [
                 'nama_lengkap'  => 'Zaskia',
                 'jenis_kelamin' => 'perempuan',
                 'tanggal_lahir' => '2009-08-30',
                 'tempat_lahir'  => 'Bandung',
                 'agama'         => 'Islam',
                 'alamat'        => 'Cilebak',
                 'telepon'       => '09886345673',
                 'email'         => 'jajas30@gmail.com',
            ],
            [
                 'nama_lengkap'  => 'Anggi',
                 'jenis_kelamin' => 'perempuan',
                 'tanggal_lahir' => '2009-03-15',
                 'tempat_lahir'  => 'Bandung',
                 'agama'         => 'Islam',
                 'alamat'        => 'Cibedug',
                 'telepon'       => '086355257347',
                 'email'         => 'anggiw15@gmail.com',
            ],
            [
                 'nama_lengkap'  => 'Dilla',
                 'jenis_kelamin' => 'perempuan',
                 'tanggal_lahir' => '2008-10-22',
                 'tempat_lahir'  => 'Bandung',
                 'agama'         => 'Islam',
                 'alamat'        => 'Tci',
                 'telepon'       => '0851243793823',
                 'email'         => 'dilla22@gmail.com',   
            ],
            [
                 'nama_lengkap'  => 'Ani',
                 'jenis_kelamin' => 'perempuan',
                 'tanggal_lahir' => '2009-07-03',
                 'tempat_lahir'  => 'Bandung',
                 'agama'         => 'Islam',
                 'alamat'        => 'Rancamanyar',
                 'telepon'       => '08635472924',
                 'email'         => 'aniw03@gmail.com',
            ],
            [
                 'nama_lengkap'  => 'Salwa',
                 'jenis_kelamin' => 'perempuan',
                 'tanggal_lahir' => '2009-02-10',
                 'tempat_lahir'  => 'Bandung',
                 'agama'         => 'Islam',
                 'alamat'        => 'Babakan Nugraha',
                 'telepon'       => '08543827323',
                 'email'         => 'awawawa10@gmail.com',
            ],
            [
                 'nama_lengkap'  => 'Riska',
                 'jenis_kelamin' => 'perempuan',
                 'tanggal_lahir' => '2009-01-16',
                 'tempat_lahir'  => 'Bandung',
                 'agama'         => 'Islam',
                 'alamat'        => 'Cibaduyut',
                 'telepon'       => '086429820484',
                 'email'         => 'bais16@gmail.com',
            ],
            [
                 'nama_lengkap'  => 'Ilham',
                 'jenis_kelamin' => 'Laki-laki',
                 'tanggal_lahir' => '2009-02-26',
                 'tempat_lahir'  => 'Bandung',
                 'agama'         => 'Islam',
                 'alamat'        => 'Rancamayar',
                 'telepon'       => '0864823983233',
                 'email'         => 'ijo26@gmail.com',
            ],
            [
                 'nama_lengkap'  => 'Dikri',
                 'jenis_kelamin' => 'Laki-laki',
                 'tanggal_lahir' => '2009-05-01',
                 'tempat_lahir'  => 'Bandung',
                 'agama'         => 'Islam',
                 'alamat'        => 'Rancamanyar',
                 'telepon'       => '08625642774',
                 'email'         => 'dikcdick05@gmail.com',
            ],
            [
                 'nama_lengkap'  => 'Teguh',
                 'jenis_kelamin' => 'Laki-laki',
                 'tanggal_lahir' => '2009-04-24',
                 'tempat_lahir'  => 'Bandung',
                 'agama'         => 'Islam',
                 'alamat'        => 'Nusa',
                 'telepon'       => '0865236687',
                 'email'         => 'guhteguh24@gmail.com',
            ],
            [
                 'nama_lengkap'  => 'Reihan',
                 'jenis_kelamin' => 'Laki-laki',
                 'tanggal_lahir' => '2009-08-22',
                 'tempat_lahir'  => 'Bandung',
                 'agama'         => 'Islam',
                 'alamat'        => 'Rancamanyar',
                 'telepon'       => '0842647248',
                 'email'         => 'mulet22@gmail.com',
            ],
        ]);
    }
    }

