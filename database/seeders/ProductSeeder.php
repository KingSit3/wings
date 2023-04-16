<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            [
                'product_code' => "gvb",
                'product_name' => "Giv Biru",
                'price' => 11000,
                'currency' => "IDR",
                'discount' => null,
                'dimension' => "14 cm X 7 cm",
                'unit' => "PCS",
                'created_at' => now()
            ],
            [
                'product_code' => "sklinp",
                'product_name' => "So Klin Pewangi",
                'price' => 15000,
                'currency' => "IDR",
                'discount' => 13500,
                'dimension' => "13 cm X 10 cm",
                'unit' => "PCS",
                'created_at' => now()
            ],
            [
                'product_code' => "sklinl",
                'product_name' => "So Klin Liquid",
                'price' => 18000,
                'currency' => "IDR",
                'discount' => null,
                'dimension' => "16 cm X 15 cm",
                'unit' => "PCS",
                'created_at' => now()
            ]
        ]);
    }
}
