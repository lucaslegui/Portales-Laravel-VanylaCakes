<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'tartas',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'cupcakes',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'brownies',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'galletas',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'pan',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
