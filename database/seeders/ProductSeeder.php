<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database ks
     */
    public function run(): void
    {
        $products = File::get('database/json/products.json');
        $data = collect(json_decode($products));

        $data->each(function($product){
            Product::create([
                "name" => $product->name,
                "price" => $product->price ,
                "description" => $product->description,
                "category" => $product->category,
                "image" => $product->image
            ]);
        });
    }
}
