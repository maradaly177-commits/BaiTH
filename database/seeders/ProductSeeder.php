<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::truncate(); // xoá dữ liệu cũ cho chắc

        Product::create([
            'name' => 'Áo thun',
            'price' => 120000,
            'stock' => 50,
        ]);

        Product::create([
            'name' => 'Quần jean',
            'price' => 350000,
            'stock' => 30,
        ]);
        Product::create([
        'name' => 'Áo hoodie',
        'price' => 450000,
        'stock' => 20,
    ]);

        Product::create([
        'name' => 'Áo sơ mi',
        'price' => 280000,
        'stock' => 25,
    ]);

        Product::create([
        'name' => 'Quần short',
        'price' => 180000,
        'stock' => 40,
    ]);

        Product::create([
        'name' => 'Giày sneaker',
        'price' => 650000,
        'stock' => 15,
    ]);

        Product::create([
        'name' => 'Dép sandal',
        'price' => 220000,
        'stock' => 35,
    ]);

        Product::create([
        'name' => 'Mũ lưỡi trai',
        'price' => 120000,
        'stock' => 60,
    ]);

        Product::create([
        'name' => 'Túi xách',
        'price' => 520000,
        'stock' => 10,
    ]);

        Product::create([
        'name' => 'Thắt lưng da',
        'price' => 300000,
        'stock' => 18,
    ]);
    }
}
