<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
         public function run()
    {
        {
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Riska Aulia',
            'nim' => '123456',
        ]);

        Wali::create([
            'nama' => 'Bu iis',
            'id_mahasiswa' => $mahasiswa->id
        ]);
    }
    }
}
