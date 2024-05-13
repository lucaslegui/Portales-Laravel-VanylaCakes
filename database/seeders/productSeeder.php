<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Tarta de Manzana Sin Gluten',
                'description' => 'Deliciosa tarta de manzana sin gluten con una base crujiente y relleno de manzanas frescas.',
                'ingredients' => 'manzanas, azúcar, harina de arroz, mantequilla, huevos, canela',
                'image' => 'apple-pie.jpg',
                'price' => 3000,
                'exists' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 2
            ],
            [
                'name' => 'Pastel de Fresa Sin Gluten',
                'description' => 'Pastel suave y esponjoso de fresa sin gluten con relleno de fresas frescas.',
                'ingredients' => 'Harina de almendra, fresas, azúcar, crema de fresa',
                'image' => 'img_products/pastelFresas.jpeg',
                'price' => 5000,
                'exists' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 1
            ],
            [
                'name' => 'Cupcakes de Vainilla Sin Gluten',
                'description' => 'Cupcakes de chocolate sin gluten con frosting de chocolate cremoso.',
                'ingredients' => 'Harina de almendra, chocolate, azúcar, crema de chocolate',
                'image' => 'img_products/cupcakes_chocolate.jpg',
                'price' => 1500,
                'exists' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 3
            ],
            [
                'name' => 'Brownie de Menta Sin Gluten',
                'description' => 'Brownie de menta sin gluten con un refrescante sabor a menta.',
                'ingredients' => 'Harina de almendra, menta, azúcar, chocolate',
                'image' => 'img_products/galletas_chocolate.jpg',
                'price' => 1500,
                'exists' => true,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 3
            ]
        ]);

    }
}
