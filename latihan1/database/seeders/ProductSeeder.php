<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'image' => 'https://example.com/image1.jpg',
            'title' => 'Product 1',
            'description' => 'Description for Product 1',
            'price' => 1000,
            'stock' => 10,
        ]);

        Product::create([
            'image' => 'https://example.com/image2.jpg',
            'title' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 2000,
            'stock' => 5,
        ]);
    }
}
