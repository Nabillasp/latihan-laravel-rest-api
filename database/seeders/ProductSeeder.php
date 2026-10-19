<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            [
                'name' => 'Mouse Wireless',
                'description' => 'Mouse wireless untuk komputer dan laptop',
                'category_id' => 1,
                'price' => 150000,
                'img' => null,
                'stock' => 20,
                'slug' => 'mouse-wireless',
            ],
            [
                'name' => 'Keyboard Mechanical',
                'description' => 'Keyboard mechanical untuk mengetik',
                'category_id' => 1,
                'price' => 350000,
                'img' => null,
                'stock' => 15,
                'slug' => 'keyboard-mechanical',
            ],
            [
                'name' => 'Headset',
                'description' => 'Headset untuk mendengarkan audio',
                'category_id' => 2,
                'price' => 200000,
                'img' => null,
                'stock' => 10,
                'slug' => 'headset',
            ],
        ]);
    }
}