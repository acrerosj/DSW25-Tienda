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
            'name' => 'Producto A',
            'description' => 'Descripción del Producto A',
            'price' => 19.99,
            'stock' => 100,
        ]);
        Product::create([
            'name' => 'Producto B',
            'description' => 'Descripción del Producto B',
            'price' => 29.99,
            'stock' => 50,
        ]);
        Product::create([
            'name' => 'Producto C',
            'description' => 'Descripción del Producto C',
            'price' => 9.99,
            'stock' => 200,
        ]);
    }
}
