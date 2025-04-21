<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'id' => 1,
                'name' => 'Stripe Lahinch',
                'image' => 'https://hats.com/cdn/shop/files/Mykonos_Blue_e090b3b5-e19b-401b-ab9f-0cd048a9c592.jpg?v=1742233214&width=1200',
                'price' => 13.99,
                'description' => 'The Stripe Lahinch is an updated version of the classic back in the days cotton bucket hat. It has a 2-colour stripe band & a pop color underbrim with matching taped seams. The quintessential bucket hat to protect you from the sun.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 2,
                'name' => 'Stripe Lahinch',
                'image' => 'https://hats.com/cdn/shop/files/Grey_4a56b3a2-c081-4835-8d73-f5fb09827dd5.jpg?v=1742233214&width=1200',
                'price' => 13.99,
                'description' => 'The Stripe Lahinch is an updated version of the classic back in the days cotton bucket hat. It has a 2-colour stripe band & a pop color underbrim with matching taped seams. The quintessential bucket hat to protect you from the sun.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 3,
                'name' => 'Utility Cords Jungle Hat',
                'image' => 'https://hats.com/cdn/shop/files/81c08ce389701c04a62d58e97ec19cff.jpg?v=1742234900&width=1200',
                'price' => 13.99,
                'description' => 'The Utility Cords Jungle Hat by Kangol is a cotton canvas wider brim bucket. It features utility loops and a chin cord, so you can always make sure you wherever you go. The cords are finished with a dipped color tip for an added touch of fun. The Utility Cords Jungle Hat will be your new summer-time favorite while you explore your own personal jungles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 4,
                'name' => 'Cotton Bucket Hat',
                'image' => 'https://hats.com/cdn/shop/files/f549dede95a8e97bf210f858bce3072f.jpg?v=1741742500&width=1200',
                'price' => 14.99,
                'description' => 'The Cotton Bucket by Kangol is made from lightweight twill fabric with poplin Lining & a pop color underbrim & matching the circle logo color. A stylish, portable Bucket hat to protect you from the sun.',
                'manufacturer_id'=>3,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 5,
                'name' => 'Bermuda Stripe Bucket',
                'image' => 'https://hats.com/cdn/shop/files/cedb1d974331049cff26d908cc755110.jpg?v=1741884671&width=1200',
                'price' => 12.99,
                'description' => 'The Bermuda Stripe Bucket by Kangol is a fresh version of Kangols quintessential Bermuda bucket hat. Featuring a color blocked crown with a stripe around the base & embroidered logo, these details are sure to make this a classic Kangol style.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],







        ]);
    }
}
