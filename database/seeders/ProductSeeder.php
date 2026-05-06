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
            'img' => 'product1.jpg',
            'brand' => 'Nike',
            'title' => 'Nike Air Max 270',
            'rating' => 4.5,
            'reviews' => 5,
            'sellPrice' => 250.95,
            'mrp' => 289,
            'category' => 'Shoe'
        ]);

        Product::create([
            'img' => 'product2.jpg',
            'brand' => 'Adidas',
            'title' => 'Adidas Ultraboost 22',
            'rating' => 5.0,
            'reviews' => 8,
            'sellPrice' => 320.12,
            'mrp' => 450,
            'category' => 'Shoe'
        ]);
    }
}
