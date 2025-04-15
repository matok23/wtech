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
            'name' => 'Bagane',
            'image' => 'https://i.etsystatic.com/46361038/r/il/ebf3f0/5275208120/il_570xN.5275208120_is95.jpg',
            'price' => 11.11,
            'description' => 'A whimsical woven masterpiece, the Bagane adds a splash of charm to any space. This handcrafted hanging piece, adorned with colorful threads and playful shapes, brings texture and personality to your room. Perfect for boho vibes, it\'s part wall art, part happy spell.',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Slipky',
                'image' => 'https://i1.sndcdn.com/artworks-000533533326-t8iqir-t240x240.jpg',
                'price' => 22.22,
                'description' => 'Mysterious and moody, Slipky is a sonic enigma wrapped in glitchy visuals. A digital art cover with retro-futuristic appeal, it hints at ambient beats and experimental sounds—perfect for late-night headphone sessions or as a statement visual on your digital playlists.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Gate',
                'image' => 'https://paom.com/cdn/shop/products/print_all_over_me_3_relaxed-pant_0000000p-pepperoni-pants.jpg?v=1578609835',
                'price' => 33.33,
                'description' => 'Make way for Gate—the pants that don\'t hold back. Loud, proud, and unapologetically pepperoni, these relaxed-fit trousers are a bold declaration of pizza love. Ideal for lounging or grabbing attention at casual hangs, these are pants with personality.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Boratky',
                'image' => 'https://cdn.i-scmp.com/sites/default/files/styles/1020x680/public/images/methode/2018/07/16/a6e48a02-889d-11e8-8608-b7163509a377_1280x720_113228.jpg?itok=4yqTzJmy',
                'price' => 44.44,
                'description' => 'Channel your inner icon with Boratky, the legendary mankini that broke the internet (and maybe your fashion sense). Equal parts shocking and hilarious, it\'s the ultimate party piece or dare outfit for the brave. Proceed with confidence... and caution.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
