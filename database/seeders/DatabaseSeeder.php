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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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

        $admin=User::create([
            'name' => 'Adminko malinky',
            'email' => 'admin@voguepoint.com',
            'password' => Hash::make('admin123'),
        ]);
        $admin->role='admin';
        $admin->save();

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

        DB::statement("SELECT setval('manufacturers_id_seq', COALESCE((SELECT MAX(id) FROM manufacturers), 1), true)");
        DB::statement("SELECT setval('products_id_seq', COALESCE((SELECT MAX(id) FROM products), 1), true)");
        DB::statement("SELECT setval('categories_id_seq', COALESCE((SELECT MAX(id) FROM categories), 1), true)");
        DB::statement("SELECT setval('category_product_id_seq', COALESCE((SELECT MAX(id) FROM category_product), 1), true)");
        DB::statement("SELECT setval('size_stocks_id_seq', COALESCE((SELECT MAX(id) FROM size_stocks), 1), true)");
        DB::statement("SELECT setval('orders_id_seq', COALESCE((SELECT MAX(id) FROM orders), 1), true)");
        DB::statement("SELECT setval('order_items_id_seq', COALESCE((SELECT MAX(id) FROM order_items), 1), true)");
        DB::statement("SELECT setval('cart_items_id_seq', COALESCE((SELECT MAX(id) FROM cart_items), 1), true)");

    }
}
