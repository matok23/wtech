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
                'name'=>'Women',
                'slug'=>'women',
                'type'=>'gender',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>2,
                'name'=>'Men',
                'slug'=>'men',
                'type'=>'gender',
                'created_at'=>now(),
                'updated_at'=>now()
            ],


            /** kategoria muz zena  */
            
            [   
                'id'=>3,
                'name'=>'Hats',
                'slug'=>'hats',
                'type'=>'category',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>4,
                'name'=>'Tops',
                'slug'=>'tops',
                'type'=>'category',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
             [   
                'id'=>5,
                'name'=>'Pants',
                'slug'=>'pants',
                'type'=>'category',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>6,
                'name'=>'Shoes',
                'slug'=>'shoes',
                'type'=>'category',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>7,
                'name'=>'Accessories',
                'slug'=>'accessories',
                'type'=>'category',
                'created_at'=>now(),
                'updated_at'=>now()
            ],

            /** kategorie  */

            [   
                'id'=>8,
                'name'=>'Bucket hats',
                'slug'=>'bucket-hats',
                'type'=>'subcategory',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>9,
                'name'=>'Caps',
                'slug'=>'caps',
                'type'=>'subcategory',
                'created_at'=>now(),
                'updated_at'=>now()
            ],  [   
                'id'=>10,
                'name'=>'Fedoras',
                'slug'=>'fedoras',
                'type'=>'subcategory',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>11,
                'name'=>'Shirts',
                'slug'=>'shirts',
                'type'=>'subcategory',
                'created_at'=>now(),
                'updated_at'=>now()
            ],  [   
                'id'=>12,
                'name'=>'Sweatshirt',
                'slug'=>'sweatshirt',
                'type'=>'subcategory',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>13,
                'name'=>'Gym',
                'slug'=>'gym-tops',
                'type'=>'subcategory',
                'created_at'=>now(),
                'updated_at'=>now()
            ],  [   
                'id'=>14,
                'name'=>'Shorts',
                'slug'=>'shorts',
                'type'=>'subcategory',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>15,
                'name'=>'Sweatpants',
                'slug'=>'sweatpants',
                'type'=>'subcategory',
                'created_at'=>now(),
                'updated_at'=>now()
            ],  [   
                'id'=>16,
                'name'=>'Sneakers',
                'slug'=>'sneakers',
                'type'=>'subcategory',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>17,
                'name'=>'Sandals',
                'slug'=>'sandals',
                'type'=>'subcategory',
                'created_at'=>now(),
                'updated_at'=>now()
            ], 
            [   
                'id'=>18,
                'name'=>'Bracelets',
                'slug'=>'bracelets',
                'type'=>'subcategory',
                'created_at'=>now(),
                'updated_at'=>now()
            ],  [   
                'id'=>19,
                'name'=>'Necklaces',
                'slug'=>'necklaces',
                'type'=>'subcategory',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
