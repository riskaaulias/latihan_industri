<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('products')->insert([ 
        [
        'name' => "Basreng",
        'description' => "Basreng enak dan gurih",
        'price' => 3000,
        'stock' => 5000,
        ],
        [
        'name' => "Seblak",
        'description' => "Gurih manis dan berkuah",
        'price' => 15000,
        'stock' => 100,
        ],
        [
        'name' => "Cimol",
        'description' => "Lezat dan bumbunya creamy",
        'price' => 5000,
        'stock' => 150,
        ],
        [
        'name' => "Cireng",
        'description' => "Mantap isiannya lumer",
        'price' => 2000,
        'stock' => 250,
        ],
        [
        'name' => "Citul",
        'description' => "Gurih tulangnya fresh",
        'price' => 2000,
        'stock' => 30,
        ],
        [
        'name' => "Cirambay",
        'description' => "Nikmat acinya ngarambay",
        'price' => 5000,
        'stock' => 129,
        ],
        [
        'name' => "Baso",
        'description' => "Seger mantap dimakan saat hujan",
        'price' => 1000,
        'stock' => 800,
        ],
        [
        'name' => "Makroni",
        'description' => "Enak bumbu melimpah",
        'price' => 5000,
        'stock' => 100,
        ],
        [
        'name' => "Keju",
        'description' => "Gurih lumer sedap",
        'price' => 3000,
        'stock' => 5000,
        ],
        [
        'name' => "Coklat",
        'description' => "Manis coklat full susu",
        'price' => 2500,
        'stock' => 100,
        ],
        ]);
    }
}
