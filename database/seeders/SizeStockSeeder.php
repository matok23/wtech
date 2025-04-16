<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SizeStock;

class SizeStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SizeStock::insert([
            ['product_id' => 1, 'size' => 38, 'stock_left' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 1, 'size' => 40, 'stock_left' => 5,  'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 1, 'size' => 42, 'stock_left' => 8,  'created_at' => now(), 'updated_at' => now()],

            ['product_id' => 2, 'size' => 36, 'stock_left' => 6,  'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 2, 'size' => 38, 'stock_left' => 12, 'created_at' => now(), 'updated_at' => now()],

            ['product_id' => 3, 'size' => 40, 'stock_left' => 4,  'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 3, 'size' => 41, 'stock_left' => 7,  'created_at' => now(), 'updated_at' => now()],

            ['product_id' => 4, 'size' => 37, 'stock_left' => 3,  'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 4, 'size' => 39, 'stock_left' => 9,  'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
