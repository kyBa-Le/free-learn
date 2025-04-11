<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController
{
    public function getAllProducts() {
        $products = Product::all();
        return response()->json($products);
    }
}