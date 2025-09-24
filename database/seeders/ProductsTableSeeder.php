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
            'name' => "Basreng",
            'description' => "Basreng enak dan gurih",
            'price' => 3000,
            'stock' => 5000,
        ]);
    }
}
