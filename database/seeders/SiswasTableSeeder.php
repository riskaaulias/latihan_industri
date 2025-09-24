<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
        [
            'nama_lengkap' => 'Riska Aulia',
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '2009-1-16',
            'kelas' => '11 RPL 1',
        ],
        [
            'nama_lengkap' => 'Anggi',
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '2009-3-15',
            'kelas' => '11 RPL 1',
        ],
        [
            'nama_lengkap' => 'Zaskia',
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '2009-8-30',
            'kelas' => '11 RPL 1',
        ],
        [
            'nama_lengkap' => 'Siti',
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '2009-10-22',
            'kelas' => '11 RPL 1',
        ],
        [
            'nama_lengkap' => 'Ani',
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '2009-7-3',
            'kelas' => '11 RPL 1',
        ],
        [
            'nama_lengkap' => 'Salwa',
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '2009-2-10',
            'kelas' => '11 RPL 1',
        ],
        ]);
    }
}
