<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryProduct;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // DB::table('category_product')->truncate();

        CategoryProduct::insert([
            [
                'id'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>1,
                'category_id'=>2
            ],
            [
                'id'=>2,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>1,
                'category_id'=>1
            ],
            [
                'id'=>3,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>2,
                'category_id'=>2
            ],
            [
                'id'=>4,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>2,
                'category_id'=>5
            ],
            [
                'id'=>5,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>3,
                'category_id'=>2
            ],
            [
                'id'=>6,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>3,
                'category_id'=>4
            ],
            [
                'id'=>7,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>4,
                'category_id'=>2
            ],
            [
                'id'=>8,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>4,
                'category_id'=>3
            ],
            [
                'id'=>9,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>1,
                'category_id'=>7
            ],[
                'id'=>10,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>2,
                'category_id'=>7
            ],[
                'id'=>11,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>3,
                'category_id'=>7
            ],[
                'id'=>12,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>4,
                'category_id'=>7
            ],[
                'id'=>13,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>1,
                'category_id'=>6
            ],[
                'id'=>14,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>3,
                'category_id'=>6
            ],
        ]);
    }
}
