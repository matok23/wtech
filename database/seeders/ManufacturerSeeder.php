<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manufacturer;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manufacturer::insert([
            [   
                'id'=>1,
                'name'=>'Adidas',
                'logo'=>'https://brandlogos.net/wp-content/uploads/2020/03/Adidas-logo.png',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>2,
                'name'=>'Nike',
                'logo'=>'https://i.pinimg.com/564x/24/9d/19/249d19e5e57e445c639678bf4e5d48b5.jpg',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
             [   
                'id'=>3,
                'name'=>'Gucci',
                'logo'=>'https://logoeps.com/wp-content/uploads/2011/08/gucci-logo-vector.jpg',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>4,
                'name'=>'Puma',
                'logo'=>'https://cdn.shopify.com/s/files/1/0558/6413/1764/files/Puma_Logo_Design_History_Evolution_4_1024x1024.jpg?v=1690463782',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>5,
                'name'=>'Balenciaga',
                'logo'=>'https://1000logos.net/wp-content/uploads/2020/07/Balenciaga-logo-1917.jpg',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>6,
                'name'=>'Prada',
                'logo'=>'https://logo.com/image-cdn/images/kts928pd/production/5be7f05ad50b4254e440898461e4ad1026a11723-900x592.png?w=1920&q=72&fm=webp',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [   
                'id'=>7,
                'name'=>'Versace',
                'logo'=>'https://static.vecteezy.com/system/resources/previews/021/066/016/non_2x/versace-logo-popular-luxury-brand-free-vector.jpg',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
