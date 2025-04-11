<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name" => "Product number 1",
            "price" => 300,
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTABbXr4i-QODqhy7tofHYmTYh05rYPktzacw&s"
        ]);
        Product::create([
            "name" => "Product number 2",
            "price" => 400,
            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWxlyOawWbV241ktPfoIXKQ8iTffGS2Q8DFg&s"
        ]);
    }
}
