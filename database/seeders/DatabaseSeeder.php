<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\SizeStock;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\CartItem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            ManufacturerSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
            CategoryProductSeeder::class,
            SizeStockSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            CartItemSeeder::class,
        ]);
    }
}
