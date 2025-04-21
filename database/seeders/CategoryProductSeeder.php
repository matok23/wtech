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
                'category_id'=>3
            ],
            
            [
                'id'=>2,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>1,
                'category_id'=>8
            ],
            [
                'id'=>3,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>2,
                'category_id'=>3
            ],
            [
                'id'=>4,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>3,
                'category_id'=>3
            ],
            [
                'id'=>5,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>4,
                'category_id'=>3
            ],
            [
                'id'=>6,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>5,
                'category_id'=>3
            ],
            [
                'id'=>7,
                'created_at'=>now(),
                'updated_at'=>now(),
                'product_id'=>5,
                'category_id'=>1
            ],
      
          
        ]);
    }
}
