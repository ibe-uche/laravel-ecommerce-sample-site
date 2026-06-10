<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Classic White T-Shirt',
                'description' => 'Comfortable cotton t-shirt for everyday wear.',
                'price' => 5000,
                'stock' => 20,
                'image' => 'https://placehold.co/300x300',
            ],
            [
                'name' => 'Black Sneakers',
                'description' => 'Stylish and durable sneakers for casual use.',
                'price' => 15000,
                'stock' => 15,
                'image' => 'https://placehold.co/300x300',
            ],
            [
                'name' => 'Blue Jeans',
                'description' => 'Slim fit denim jeans with modern design.',
                'price' => 12000,
                'stock' => 10,
                'image' => 'https://placehold.co/300x300',
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'slug' => Str::slug($product['name']),
                'description' => $product['description'],
                'price' => $product['price'],
                'stock' => $product['stock'],
                'image' => $product['image'],
            ]);
        }
    }
}
