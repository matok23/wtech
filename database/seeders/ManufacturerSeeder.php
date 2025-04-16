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
        ]);
    }
}
