<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'tortas',
                'description' => 'Deliciosas tortas para todo tipo de ocasiones.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'tartas',
                'description' => 'Exquisitas tartas con una variedad de rellenos.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'cupcakes',
                'description' => 'Pequeños pasteles ideales para fiestas y eventos.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'brownies',
                'description' => 'Ricos brownies con el mejor chocolate.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'galletas',
                'description' => 'Crocantes y deliciosas galletas para disfrutar en cualquier momento.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'pan',
                'description' => 'Variedad de panes frescos y esponjosos.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
