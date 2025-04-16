<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [   
                'id'=>1,
                'name'=>'Shoes',
                'slug'=>'shoes',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>2,
                'name'=>'Clothes',
                'slug'=>'clothes',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
             [   
                'id'=>3,
                'name'=>'Swim Suits',
                'slug'=>'swim-suits',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>4,
                'name'=>'Pants',
                'slug'=>'pants',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>5,
                'name'=>'Underwear',
                'slug'=>'underwear',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>6,
                'name'=>'Women',
                'slug'=>'women',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>7,
                'name'=>'Men',
                'slug'=>'men',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
