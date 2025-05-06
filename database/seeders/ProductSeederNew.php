<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Image;

class ProductSeederNew extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonString = file_get_contents(database_path('data/products.json'));
        $products = json_decode($jsonString);
        $jsonString = file_get_contents(database_path('data/images.json'));
        $images = json_decode($jsonString);

        foreach($products as $product){
            Product::create([
                'id'=>$product->id,
                'name'=>$product->name,
                'description'=>$product->description,
                'price'=>$product->price,
                'manufacturer_id'=>$product->manufacturer_id,
                'color'=>$product->color,
            ]);
        }

        $files = Storage::disk('public')->allFiles('product_images');
        Storage::disk('public')->delete($files); 

        foreach($images as $index=>$image){
            $imageData=null;

            for($i=0;$i<3 && !$imageData;$i++){
                $imageData = @file_get_contents($image->url);
                if(!$imageData){
                    usleep(500000);
                }
            }

            if($imageData){
                $extension = pathinfo(parse_url($image->url, PHP_URL_PATH), PATHINFO_EXTENSION) ?: 'jpg';
                $filename = 'product_images/' . uniqid() . '.' . $extension;
                Storage::disk('public')->put($filename, $imageData);
                
                Image::create([
                    'product_id'=>$image->product_id,
                    'url'=>$filename,
                ]);
            }

            else{
                \Log::error("Failed to download image {$image->url} for product {$image->product_id}");
            }
        }
    }
}
