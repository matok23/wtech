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

                /**BUCKET HATS */
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
            [
                'id' => 6,
                'name' => 'Tropic Casual',
                'image' => 'https://hats.com/cdn/shop/files/f7caf356b1a577c1e279e94dcd453b84.jpg?v=1741893273&width=1200',
                'price' => 15.99,
                'description' => 'The Tropic Casual is a version of the original iconic hat that was on the scene when turntablists, rappers & graffiti writers redefined youth culture & forever changed the world. The Tropic yarn means that the hat is both lightweight & comfortable.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 7,
                'name' => 'Tropic Casual',
                'image' => 'https://hats.com/cdn/shop/files/7489422448f6be4085de69e013fb4dd6.jpg?v=1741893273&width=832',
                'price' => 15.99,
                'description' => 'The Tropic Casual is a version of the original iconic hat that was on the scene when turntablists, rappers & graffiti writers redefined youth culture & forever changed the world. The Tropic yarn means that the hat is both lightweight & comfortable.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'red'
            ],
            [
                'id' => 8,
                'name' => 'Tropic Casual',
                'image' => 'https://hats.com/cdn/shop/files/792179621086.jpg?v=1741893273&width=832',
                'price' => 15.99,
                'description' => 'The Tropic Casual is a version of the original iconic hat that was on the scene when turntablists, rappers & graffiti writers redefined youth culture & forever changed the world. The Tropic yarn means that the hat is both lightweight & comfortable.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 9,
                'name' => 'Tropic Casual',
                'image' => 'https://hats.com/cdn/shop/files/Hats_-_Charcoal_18f5c4cd-a31d-40f2-b46e-e3be27118bc4.jpg?v=1741893273&width=832',
                'price' => 15.99,
                'description' => 'The Tropic Casual is a version of the original iconic hat that was on the scene when turntablists, rappers & graffiti writers redefined youth culture & forever changed the world. The Tropic yarn means that the hat is both lightweight & comfortable.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'gray'
            ],
            [
                'id' => 10,
                'name' => 'Tropic Casual',
                'image' => 'https://hats.com/cdn/shop/files/Kangol_-_Starry_Blue_10ecefd6-6e7d-4ff4-b229-8ccc7fa7008f.jpg?v=1724157086&width=832',
                'price' => 15.99,
                'description' => 'The Tropic Casual is a version of the original iconic hat that was on the scene when turntablists, rappers & graffiti writers redefined youth culture & forever changed the world. The Tropic yarn means that the hat is both lightweight & comfortable.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 11,
                'name' => 'Tropic Casual',
                'image' => 'https://hats.com/cdn/shop/files/Kangol_-_Tan_Linen.jpg?v=1725055488&width=832',
                'price' => 19.99,
                'description' => 'The Braid Casual takes our beloved Casual style and combines it with new texture, color and feel. A must for any Kangol® lover, this style uses a lightweight braid which is expertly sewn by our craftspeople and then heat blocked into our classic shape. Weve completed this unique style with our signature Kangol® Kangaroo embroidery and a knit sweatband for ultimate comfort.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 12,
                'name' => 'Tropic Casual',
                'image' => 'https://hats.com/cdn/shop/files/Hats_-_Tan_Linen_S24.jpg?v=1744051260&width=832',
                'price' => 19.99,
                'description' => 'The Braid Casual takes our beloved Casual style and combines it with new texture, color and feel. A must for any Kangol® lover, this style uses a lightweight braid which is expertly sewn by our craftspeople and then heat blocked into our classic shape. Weve completed this unique style with our signature Kangol® Kangaroo embroidery and a knit sweatband for ultimate comfort.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'yellow'
            ],
            [
                'id' => 13,
                'name' => 'Tropic Casual',
                'image' => 'https://hats.com/cdn/shop/files/K5386_HEATHERDENIMBLUE_1.jpg?v=1744051260&width=832',
                'price' => 19.99,
                'description' => 'The Braid Casual takes our beloved Casual style and combines it with new texture, color and feel. A must for any Kangol® lover, this style uses a lightweight braid which is expertly sewn by our craftspeople and then heat blocked into our classic shape. Weve completed this unique style with our signature Kangol® Kangaroo embroidery and a knit sweatband for ultimate comfort.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 14,
                'name' => 'Washed Casual',
                'image' => 'https://hats.com/cdn/shop/files/a9ff28d8dcf65ef29a01fa3ae29a788f.jpg?v=1744299808&width=832',
                'price' => 19.99,
                'description' => 'The Washed Casual by Kangol is a lightweight bell-shape style that is ideal for spring & summer.  It will definitely be an everyday go-to for the stylish Kangol® customer.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 15,
                'name' => 'Washed Casual',
                'image' => 'https://hats.com/cdn/shop/files/Kangol_-_Cranberry_3a92c973-0f0d-46d5-a98b-aac35716052d.jpg?v=1744299808&width=832',
                'price' => 19.99,
                'description' => 'The Washed Casual by Kangol is a lightweight bell-shape style that is ideal for spring & summer.  It will definitely be an everyday go-to for the stylish Kangol® customer.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'red'
            ],

            [
                'id' => 16,
                'name' => 'Washed Bucket Hat',
                'image' => 'https://hats.com/cdn/shop/files/k4224ht-kangol-washed-bucket-starry-blue-1k_4.jpg?v=1741985711&width=832',
                'price' => 19.99,
                'description' => 'The Washed Bucket from Kangol is made using lightweight cotton that is great for the spring and summer seasons. Its clean look and classic shape make it a versatile hat that works for different kinds of outfits. The cross hatching in the embroidery adds definition to the kangaroo logo.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 17,
                'name' => 'Washed Bucket Hat',
                'image' => 'https://hats.com/cdn/shop/files/k4224ht-kangol-washed-bucket-lemon-sorbet-1_5.jpg?v=1741985711&width=832',
                'price' => 19.99,
                'description' => 'The Washed Bucket from Kangol is made using lightweight cotton that is great for the spring and summer seasons. Its clean look and classic shape make it a versatile hat that works for different kinds of outfits. The cross hatching in the embroidery adds definition to the kangaroo logo.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'yellow'
            ],
            [
                'id' => 18,
                'name' => 'Washed Bucket Hat',
                'image' => 'https://hats.com/cdn/shop/files/k4224ht-kangol-washed-bucket-electric-pink-1k_4.jpg?v=1741985711&width=832',
                'price' => 19.99,
                'description' => 'The Washed Bucket from Kangol is made using lightweight cotton that is great for the spring and summer seasons. Its clean look and classic shape make it a versatile hat that works for different kinds of outfits. The cross hatching in the embroidery adds definition to the kangaroo logo.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'pink'
            ],
            [
                'id' => 19,
                'name' => 'Washed Bucket Hat',
                'image' => 'https://hats.com/cdn/shop/files/k4224ht-kangol-washed-bucket-oil-green-1k_4.jpg?v=1741985711&width=832',
                'price' => 19.99,
                'description' => 'The Washed Bucket from Kangol is made using lightweight cotton that is great for the spring and summer seasons. Its clean look and classic shape make it a versatile hat that works for different kinds of outfits. The cross hatching in the embroidery adds definition to the kangaroo logo.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 20,
                'name' => 'Washed Bucket Hat',
                'image' => 'https://hats.com/cdn/shop/files/k4224ht_kh262_main_kh262_4.jpg?v=1741985711&width=832',
                'price' => 19.99,
                'description' => 'The Washed Bucket from Kangol is made using lightweight cotton that is great for the spring and summer seasons. Its clean look and classic shape make it a versatile hat that works for different kinds of outfits. The cross hatching in the embroidery adds definition to the kangaroo logo.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],

            /**CAPS */
            [
                'id' => 21,
                'name' => 'Washed Baseball',
                'image' => 'https://hats.com/cdn/shop/files/Kangol_-_K5165HT.jpg?v=1744318405&width=832',
                'price' => 19.99,
                'description' => 'The Washed Baseball Cap by Kangol is a cotton baseball with a vintage fit. It has soft unstructured panels and a leather adjustable back strap. Its clean look & timeless shape make it the perfect hat for all seasons. The cross hatching on the embroidered kangaroo logo adds definition.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 22,
                'name' => 'Washed Baseball',
                'image' => 'https://hats.com/cdn/shop/files/792179673504.jpg?v=1744318343&width=832',
                'price' => 19.99,
                'description' => 'The Washed Baseball Cap by Kangol is a cotton baseball with a vintage fit. It has soft unstructured panels and a leather adjustable back strap. Its clean look & timeless shape make it the perfect hat for all seasons. The cross hatching on the embroidered kangaroo logo adds definition.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 23,
                'name' => 'Washed Baseball',
                'image' => 'https://hats.com/cdn/shop/files/792179673511.jpg?v=1744318405&width=832',
                'price' => 19.99,
                'description' => 'The Washed Baseball Cap by Kangol is a cotton baseball with a vintage fit. It has soft unstructured panels and a leather adjustable back strap. Its clean look & timeless shape make it the perfect hat for all seasons. The cross hatching on the embroidered kangaroo logo adds definition.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 24,
                'name' => 'Washed Baseball',
                'image' => 'https://hats.com/cdn/shop/files/792179692604.jpg?v=1724187222&width=832',
                'price' => 19.99,
                'description' => 'The Washed Baseball Cap by Kangol is a cotton baseball with a vintage fit. It has soft unstructured panels and a leather adjustable back strap. Its clean look & timeless shape make it the perfect hat for all seasons. The cross hatching on the embroidered kangaroo logo adds definition.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 25,
                'name' => 'Washed Baseball',
                'image' => 'https://hats.com/cdn/shop/files/a1921872fe62d0e14a41e97637ab0737.jpg?v=1741959067&width=832',
                'price' => 19.99,
                'description' => 'The Washed Baseball Cap by Kangol is a cotton baseball with a vintage fit. It has soft unstructured panels and a leather adjustable back strap. Its clean look & timeless shape make it the perfect hat for all seasons. The cross hatching on the embroidered kangaroo logo adds definition.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'red'
            ],
            [
                'id' => 26,
                'name' => 'Washed Baseball',
                'image' => 'https://hats.com/cdn/shop/files/f76c396ac9be440bc3a0b90171ee2151.jpg?v=1741959201&width=1200',
                'price' => 19.99,
                'description' => 'The Washed Baseball Cap by Kangol is a cotton baseball with a vintage fit. It has soft unstructured panels and a leather adjustable back strap. Its clean look & timeless shape make it the perfect hat for all seasons. The cross hatching on the embroidered kangaroo logo adds definition.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'pink'
            ],
            [
                'id' => 27,
                'name' => 'Washed Baseball',
                'image' => 'https://hats.com/cdn/shop/files/160b3ebfb2a98d32c694d668c6431872.jpg?v=1741959067&width=832',
                'price' => 19.99,
                'description' => 'The Washed Baseball Cap by Kangol is a cotton baseball with a vintage fit. It has soft unstructured panels and a leather adjustable back strap. Its clean look & timeless shape make it the perfect hat for all seasons. The cross hatching on the embroidered kangaroo logo adds definition.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 28,
                'name' => 'Washed Baseball',
                'image' => 'https://hats.com/cdn/shop/files/160b3ebfb2a98d32c694d668c6431872.jpg?v=1741959067&width=832',
                'price' => 19.99,
                'description' => 'The Washed Baseball Cap by Kangol is a cotton baseball with a vintage fit. It has soft unstructured panels and a leather adjustable back strap. Its clean look & timeless shape make it the perfect hat for all seasons. The cross hatching on the embroidered kangaroo logo adds definition.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 29,
                'name' => 'Washed Baseball',
                'image' => 'https://hats.com/cdn/shop/files/c84aee914e771918e48e82ad2798f881.jpg?v=1741959201&width=832',
                'price' => 19.99,
                'description' => 'The Washed Baseball Cap by Kangol is a cotton baseball with a vintage fit. It has soft unstructured panels and a leather adjustable back strap. Its clean look & timeless shape make it the perfect hat for all seasons. The cross hatching on the embroidered kangaroo logo adds definition.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 30,
                'name' => 'Washed Baseball',
                'image' => 'https://hats.com/cdn/shop/files/Hats_-_Iced_Lilac_2de12d79-ee24-4ed1-a428-f2a20aa4d13f.jpg?v=1741959201&width=832',
                'price' => 19.99,
                'description' => 'The Washed Baseball Cap by Kangol is a cotton baseball with a vintage fit. It has soft unstructured panels and a leather adjustable back strap. Its clean look & timeless shape make it the perfect hat for all seasons. The cross hatching on the embroidered kangaroo logo adds definition.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'purple'
            ],
            [
                'id' => 31,
                'name' => 'Washed Baseball',
                'image' => 'https://hats.com/cdn/shop/files/792179766039.jpg?v=1724187247&width=832',
                'price' => 19.99,
                'description' => 'The Washed Baseball Cap by Kangol is a cotton baseball with a vintage fit. It has soft unstructured panels and a leather adjustable back strap. Its clean look & timeless shape make it the perfect hat for all seasons. The cross hatching on the embroidered kangaroo logo adds definition.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'pink'
            ],
            [
                'id' => 32,
                'name' => 'Tropic Ventair Spacecap',
                'image' => 'https://hats.com/cdn/shop/files/7a2edfa17e9382914b8cbd1fa3972e19.jpg?v=1744906176&width=832',
                'price' => 11.99,
                'description' => 'The Tropic Ventair Spacecap is Kangols seamless knit baseball hat. The Ventair pattern allows ventilation air flow for ultimate comfort in spring & summer weather.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 33,
                'name' => 'Tropic Ventair Spacecap',
                'image' => 'https://hats.com/cdn/shop/files/ad18606672be54671b065e85857e79a1.jpg?v=1744906176&width=832',
                'price' => 11.99,
                'description' => 'The Tropic Ventair Spacecap is Kangols seamless knit baseball hat. The Ventair pattern allows ventilation air flow for ultimate comfort in spring & summer weather.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'red'
            ],
            [
                'id' => 34,
                'name' => 'Tropic Ventair Spacecap',
                'image' => 'https://hats.com/cdn/shop/files/b969154f3962ad2a95ede102001ef436.jpg?v=1744906176&width=832',
                'price' => 11.99,
                'description' => 'The Tropic Ventair Spacecap is Kangols seamless knit baseball hat. The Ventair pattern allows ventilation air flow for ultimate comfort in spring & summer weather.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 35,
                'name' => 'Tropic Ventair Spacecap',
                'image' => 'https://hats.com/cdn/shop/files/4a34dbcff4cb114940c49f481dd57f75.jpg?v=1744906176&width=832',
                'price' => 11.99,
                'description' => 'The Tropic Ventair Spacecap is Kangols seamless knit baseball hat. The Ventair pattern allows ventilation air flow for ultimate comfort in spring & summer weather.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'yellow'
            ],
            [
                'id' => 36,
                'name' => 'Tropic Ventair Spacecap',
                'image' => 'https://hats.com/cdn/shop/files/4cf1d874ab17d2c93514d4671783aa72.jpg?v=1744906176&width=832',
                'price' => 11.99,
                'description' => 'The Tropic Ventair Spacecap is Kangols seamless knit baseball hat. The Ventair pattern allows ventilation air flow for ultimate comfort in spring & summer weather.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 37,
                'name' => 'Tropic Ventair Spacecap',
                'image' => 'https://hats.com/cdn/shop/files/80be6f51df15d7b44099c174004a35dc.jpg?v=1744906176&width=832',
                'price' => 11.99,
                'description' => 'The Tropic Ventair Spacecap is Kangols seamless knit baseball hat. The Ventair pattern allows ventilation air flow for ultimate comfort in spring & summer weather.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 38,
                'name' => 'Seersucker Mesh Trucker',
                'image' => 'https://hats.com/cdn/shop/files/792179768613.jpg?v=1725054131&width=832',
                'price' => 5.99,
                'description' => 'The Seersucker Mesh Trucker by Kangol is crafted from a seersucker textured poly material and classic mesh back panels. The back of the hat is fully adjustable with a snap tab closure. The cap features Kangols signature Kangaroo logo in a silicone-based print on the front of the cap. Its a modern take on a classic silhouette.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'yellow'
            ],
            [
                'id' => 39,
                'name' => 'Seersucker Mesh Trucker',
                'image' => 'https://hats.com/cdn/shop/files/Hats_-_Blue_c3edfe24-6980-4c4a-a147-4c39b42083e3.jpg?v=1744206648&width=832',
                'price' => 5.99,
                'description' => 'The Seersucker Mesh Trucker by Kangol is crafted from a seersucker textured poly material and classic mesh back panels. The back of the hat is fully adjustable with a snap tab closure. The cap features Kangols signature Kangaroo logo in a silicone-based print on the front of the cap. Its a modern take on a classic silhouette.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 40,
                'name' => 'Seersucker Mesh Trucker',
                'image' => 'https://hats.com/cdn/shop/files/792179768620.jpg?v=1744206648&width=832',
                'price' => 5.99,
                'description' => 'The Seersucker Mesh Trucker by Kangol is crafted from a seersucker textured poly material and classic mesh back panels. The back of the hat is fully adjustable with a snap tab closure. The cap features Kangols signature Kangaroo logo in a silicone-based print on the front of the cap. Its a modern take on a classic silhouette.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],

            /**FEDORAS */

            [
                'id' => 41,
                'name' => 'Mannes Braided Trilby',
                'image' => 'https://hats.com/cdn/shop/files/81690_AMPHORAMULTI.jpg?v=1743708575&width=832',
                'price' => 51.99,
                'description' => 'The Mannes by Bailey 1922 is a 3 3/4" Teardrop crown trilby with a 1 5/8" Snap brim. It features a custom color mixed braid and contrast rope grosgrain band finished with a Comfort sweatband. This easy-to-wear Teardrop Snap brim flatters every face shape.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 42,
                'name' => 'Mannes Braided Trilby',
                'image' => 'https://hats.com/cdn/shop/files/Bailey-of-Hollywood-Mannes-Braided-Trilby-Trilby-Natural-Multi-MAIN-655722169926-3084.jpg?v=1743708575&width=832',
                'price' => 51.99,
                'description' => 'The Mannes by Bailey 1922 is a 3 3/4" Teardrop crown trilby with a 1 5/8" Snap brim. It features a custom color mixed braid and contrast rope grosgrain band finished with a Comfort sweatband. This easy-to-wear Teardrop Snap brim flatters every face shape.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'yellow'
            ],
            [
                'id' => 43,
                'name' => 'Mannes Braided Trilby',
                'image' => 'https://hats.com/cdn/shop/files/Bailey-of-Hollywood-Mannes-Braided-Trilby-Trilby-Brown-Multi-MAIN-655722172353-2757.jpg?v=1743708575&width=832',
                'price' => 51.99,
                'description' => 'The Mannes by Bailey 1922 is a 3 3/4" Teardrop crown trilby with a 1 5/8" Snap brim. It features a custom color mixed braid and contrast rope grosgrain band finished with a Comfort sweatband. This easy-to-wear Teardrop Snap brim flatters every face shape.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 44,
                'name' => 'Mannes Braided Trilby',
                'image' => 'https://hats.com/cdn/shop/files/Bailey-of-Hollywood-Mannes-Braided-Trilby-Trilby-Navy-Multi-MAIN-655722194317-3191.jpg?v=1743708575&width=832',
                'price' => 51.99,
                'description' => 'The Mannes by Bailey 1922 is a 3 3/4" Teardrop crown trilby with a 1 5/8" Snap brim. It features a custom color mixed braid and contrast rope grosgrain band finished with a Comfort sweatband. This easy-to-wear Teardrop Snap brim flatters every face shape.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 45,
                'name' => 'Mannes Braided Trilby',
                'image' => 'https://hats.com/cdn/shop/files/unnamed.jpg?v=1743708575&width=832',
                'price' => 51.99,
                'description' => 'The Mannes by Bailey 1922 is a 3 3/4" Teardrop crown trilby with a 1 5/8" Snap brim. It features a custom color mixed braid and contrast rope grosgrain band finished with a Comfort sweatband. This easy-to-wear Teardrop Snap brim flatters every face shape.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 46,
                'name' => 'Mannes Braided Trilby',
                'image' => 'https://hats.com/cdn/shop/files/81690_CM037_MAIN_5.jpg?v=1743708575&width=832',
                'price' => 51.99,
                'description' => 'The Mannes by Bailey 1922 is a 3 3/4" Teardrop crown trilby with a 1 5/8" Snap brim. It features a custom color mixed braid and contrast rope grosgrain band finished with a Comfort sweatband. This easy-to-wear Teardrop Snap brim flatters every face shape.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 47,
                'name' => 'Mannes Braided Trilby',
                'image' => 'https://hats.com/cdn/shop/files/Bailey-of-Hollywood-Mannes-Braided-Trilby-Trilby-Skydiver-MAIN-655722482988-8748.jpg?v=1743708575&width=832',
                'price' => 51.99,
                'description' => 'The Mannes by Bailey 1922 is a 3 3/4" Teardrop crown trilby with a 1 5/8" Snap brim. It features a custom color mixed braid and contrast rope grosgrain band finished with a Comfort sweatband. This easy-to-wear Teardrop Snap brim flatters every face shape.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 48,
                'name' => 'Blackburn LiteStraw® Fedora',
                'image' => 'https://hats.com/cdn/shop/files/655722333372.jpg?v=1743818431&width=832',
                'price' => 32.99,
                'description' => 'The Blackburn LiteStraw® Fedora by Bailey 1922 is a classic straw fedora.  The LiteStraw® finish allows the hat to be lightweight, durable, and water repellent.  Due to the nature of the fine fibers used to create the Shantung straw some color variation will occur when dyed. This enhances the beauty and uniqueness of this product.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 49,
                'name' => 'Blackburn LiteStraw® Fedora',
                'image' => 'https://hats.com/cdn/shop/files/655722455777.jpg?v=1743818431&width=832',
                'price' => 32.99,
                'description' => 'The Blackburn LiteStraw® Fedora by Bailey 1922 is a classic straw fedora.  The LiteStraw® finish allows the hat to be lightweight, durable, and water repellent.  Due to the nature of the fine fibers used to create the Shantung straw some color variation will occur when dyed. This enhances the beauty and uniqueness of this product.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 50,
                'name' => 'Blackburn LiteStraw® Fedora',
                'image' => 'https://hats.com/cdn/shop/files/Hats_-_Opal.jpg?v=1743818431&width=832',
                'price' => 32.99,
                'description' => 'The Blackburn LiteStraw® Fedora by Bailey 1922 is a classic straw fedora.  The LiteStraw® finish allows the hat to be lightweight, durable, and water repellent.  Due to the nature of the fine fibers used to create the Shantung straw some color variation will occur when dyed. This enhances the beauty and uniqueness of this product.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 51,
                'name' => 'Blackburn LiteStraw® Fedora',
                'image' => 'https://hats.com/cdn/shop/files/Hats_-_Elemental_Blue.jpg?v=1743818431&width=832',
                'price' => 32.99,
                'description' => 'The Blackburn LiteStraw® Fedora by Bailey 1922 is a classic straw fedora.  The LiteStraw® finish allows the hat to be lightweight, durable, and water repellent.  Due to the nature of the fine fibers used to create the Shantung straw some color variation will occur when dyed. This enhances the beauty and uniqueness of this product.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 52,
                'name' => 'Blackburn LiteStraw® Fedora',
                'image' => 'https://hats.com/cdn/shop/files/Bailey_-_63117.jpg?v=1743818414&width=832',
                'price' => 32.99,
                'description' => 'The Blackburn LiteStraw® Fedora by Bailey 1922 is a classic straw fedora.  The LiteStraw® finish allows the hat to be lightweight, durable, and water repellent.  Due to the nature of the fine fibers used to create the Shantung straw some color variation will occur when dyed. This enhances the beauty and uniqueness of this product.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 53,
                'name' => 'Tate Braided Fedora',
                'image' => 'https://hats.com/cdn/shop/files/5432c94e50810f05389c70b52786c2c9.jpg?v=1744317747&width=832',
                'price' => 12.99,
                'description' => 'Made with 100% polypropylene, the Tate is a spring and summer fedora from the Bailey 1922 Breed group. This braided fedora has a 2” turn up brim and a center dent crown.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 54,
                'name' => 'Tate Braided Fedora',
                'image' => 'https://hats.com/cdn/shop/files/79fbc0968de33a49da46c35c4c7d91f9.jpg?v=1744317747&width=832',
                'price' => 12.99,
                'description' => 'Made with 100% polypropylene, the Tate is a spring and summer fedora from the Bailey 1922 Breed group. This braided fedora has a 2” turn up brim and a center dent crown.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'yellow'
            ],
            [
                'id' => 55,
                'name' => 'Tate Braided Fedora',
                'image' => 'https://hats.com/cdn/shop/files/8b1a4f84a570aedb08ad1214a09c2c35.jpg?v=1744317747&width=832',
                'price' => 12.99,
                'description' => 'Made with 100% polypropylene, the Tate is a spring and summer fedora from the Bailey 1922 Breed group. This braided fedora has a 2” turn up brim and a center dent crown.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 56,
                'name' => 'Tate Braided Fedora',
                'image' => 'https://hats.com/cdn/shop/files/51b920e01e8ef56deb6cfb3c253b3b66.jpg?v=1744317747&width=832',
                'price' => 12.99,
                'description' => 'Made with 100% polypropylene, the Tate is a spring and summer fedora from the Bailey 1922 Breed group. This braided fedora has a 2” turn up brim and a center dent crown.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            
            /**MAN TOPS */

            [
                'id' => 57,
                'name' => 'Loose Fit Pleated T-shirt',
                'image' => 'https://image.hm.com/assets/hm/a1/c1/a1c1a37264e90abce4bc1d22781fbea233cc2615.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Loose-fit T-shirt in pleated jersey with a generous, but not oversized silhouette. Ribbed crew neck, dropped shoulders, and a straight-cut hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 58,
                'name' => 'Loose Fit Pleated T-shirt',
                'image' => 'https://image.hm.com/assets/hm/48/73/4873e856eb1ec245c0630dba3e2542ea11a7695f.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Loose-fit T-shirt in pleated jersey with a generous, but not oversized silhouette. Ribbed crew neck, dropped shoulders, and a straight-cut hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 59,
                'name' => 'Regular-Fit T-Shirt with Collar',
                'image' => 'https://image.hm.com/assets/hm/08/35/0835ad906018ec3d602357d9d091d12c51d49159.jpg?imwidth=768',
                'price' => 14.99,
                'description' => 'Regular-fit T-shirt in textured, cotton-blend jersey with a comfortable, classic silhouette. Collar and a small, V-shaped opening at neck.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 60,
                'name' => 'Regular-Fit T-Shirt with Collar',
                'image' => 'https://image.hm.com/assets/hm/66/d1/66d188900a4344cc2b2f920a957c7026f886f708.jpg?imwidth=768',
                'price' => 14.99,
                'description' => 'Regular-fit T-shirt in textured, cotton-blend jersey with a comfortable, classic silhouette. Collar and a small, V-shaped opening at neck.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 61,
                'name' => 'Regular-Fit T-Shirt with Collar',
                'image' => 'https://image.hm.com/assets/hm/38/cf/38cfaf2369ca69059c71e8adae5d4a0874e0b21f.jpg?imwidth=768',
                'price' => 14.99,
                'description' => 'Regular-fit T-shirt in textured, cotton-blend jersey with a comfortable, classic silhouette. Collar and a small, V-shaped opening at neck.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 62,
                'name' => 'Slim Fit Polo Shirt',
                'image' => 'https://image.hm.com/assets/hm/c4/01/c401bd7daa7db256566a2c285ce80df671042beb.jpg?imwidth=768',
                'price' => 10.99,
                'description' => 'Slim-fit polo shirt in a soft, airy knit with a fitted silhouette. Collar, button placket, short sleeves, and a straight hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 63,
                'name' => 'Slim Fit Polo Shirt',
                'image' => 'https://image.hm.com/assets/hm/e5/90/e590d64b11dbedc80e3fdc5815b7f2b09945abb6.jpg?imwidth=768',
                'price' => 10.99,
                'description' => 'Slim-fit polo shirt in a soft, airy knit with a fitted silhouette. Collar, button placket, short sleeves, and a straight hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 64,
                'name' => 'Slim Fit Polo Shirt',
                'image' => 'https://image.hm.com/assets/hm/b5/88/b588630d74e865952409ab0dda18b1d70561491c.jpg?imwidth=768',
                'price' => 10.99,
                'description' => 'Slim-fit polo shirt in a soft, airy knit with a fitted silhouette. Collar, button placket, short sleeves, and a straight hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 65,
                'name' => 'Slim Fit Polo Shirt',
                'image' => 'https://image.hm.com/assets/hm/9b/64/9b64d385ee2ee020a302d42837511eeec7f341ad.jpg?imwidth=768',
                'price' => 10.99,
                'description' => 'Slim-fit polo shirt in a soft, airy knit with a fitted silhouette. Collar, button placket, short sleeves, and a straight hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 66,
                'name' => 'Slim Fit Polo Shirt',
                'image' => 'https://image.hm.com/assets/hm/5d/c5/5dc591bbbb159d4e6b3ea9ac6742c691cdd27ff0.jpg?imwidth=768',
                'price' => 10.99,
                'description' => 'Slim-fit polo shirt in a soft, airy knit with a fitted silhouette. Collar, button placket, short sleeves, and a straight hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 67,
                'name' => 'Loose Fit Printed T-shirt',
                'image' => 'https://image.hm.com/assets/hm/55/74/557463be5851231108919dacc5707574a1e5863b.jpg?imwidth=768',
                'price' => 7.99,
                'description' => 'Loose-fit T-shirt in medium weight cotton jersey with a printed motif and a generous but not oversized silhouette. Ribbed crew neck, dropped shoulders, and a straight-cut hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'pink'
            ],
            [
                'id' => 68,
                'name' => 'Loose Fit Printed T-shirt',
                'image' => 'https://image.hm.com/assets/hm/d3/5c/d35c622819e98c67f3442c9e4dc46771a189a9ea.jpg?imwidth=768',
                'price' => 7.99,
                'description' => 'Loose-fit T-shirt in medium weight cotton jersey with a printed motif and a generous but not oversized silhouette. Ribbed crew neck, dropped shoulders, and a straight-cut hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'yellow'
            ],
            [
                'id' => 69,
                'name' => 'Loose Fit Printed T-shirt',
                'image' => 'https://image.hm.com/assets/hm/1d/02/1d024bb67a4d6701809e9776c2a80797c206563d.jpg?imwidth=768',
                'price' => 7.99,
                'description' => 'Loose-fit T-shirt in medium weight cotton jersey with a printed motif and a generous but not oversized silhouette. Ribbed crew neck, dropped shoulders, and a straight-cut hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 70,
                'name' => 'Loose Fit Printed T-shirt',
                'image' => 'https://image.hm.com/assets/hm/d5/b1/d5b15e116234490c8bd7f4466d10287676201f8a.jpg?imwidth=7688',
                'price' => 7.99,
                'description' => 'Loose-fit T-shirt in medium weight cotton jersey with a printed motif and a generous but not oversized silhouette. Ribbed crew neck, dropped shoulders, and a straight-cut hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 71,
                'name' => 'Loose Fit Printed T-shirt',
                'image' => 'https://image.hm.com/assets/hm/33/a1/33a1c254d91f0238b078578e9438add20bda0e9d.jpg?imwidth=768',
                'price' => 7.99,
                'description' => 'Loose-fit T-shirt in medium weight cotton jersey with a printed motif and a generous but not oversized silhouette. Ribbed crew neck, dropped shoulders, and a straight-cut hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'yellow'
            ],
            /**Sweatshirt */
            [
                'id' => 72,
                'name' => 'Loose Fit Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/ab/ff/abff3585fc5d57baf5d454d2be0ce931f836e5f2.jpg?imwidth=768',
                'price' => 30.99,
                'description' => 'Loose-fit sweatshirt in lightweight, cotton-blend fabric with a generous, but not oversized silhouette. Round, ribbed neck, dropped shoulders, and long sleeves. Wide ribbing at cuffs and hem. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 73,
                'name' => 'Loose Fit Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/e5/16/e516a4193581f5d8194a083db3ce3fa27165b271.jpg?imwidth=768',
                'price' => 30.99,
                'description' => 'Loose-fit sweatshirt in lightweight, cotton-blend fabric with a generous, but not oversized silhouette. Round, ribbed neck, dropped shoulders, and long sleeves. Wide ribbing at cuffs and hem. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 74,
                'name' => 'Loose Fit Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/84/b0/84b01ab0b5609c16bf02b48c43589c683aa59595.jpg?imwidth=768',
                'price' => 30.99,
                'description' => 'Loose-fit sweatshirt in lightweight, cotton-blend fabric with a generous, but not oversized silhouette. Round, ribbed neck, dropped shoulders, and long sleeves. Wide ribbing at cuffs and hem. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 75,
                'name' => 'Loose Fit Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/30/3b/303b85d60eb5e0836e0f2756ff207fc0b59c0c41.jpg?imwidth=768',
                'price' => 50.99,
                'description' => 'Loose-fit sweatshirt in lightweight, cotton-blend fabric with a generous, but not oversized silhouette. Round, ribbed neck, dropped shoulders, and long sleeves. Wide ribbing at cuffs and hem. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 76,
                'name' => 'Loose Fit Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/52/bc/52bcadebd6bebe1d2c2228655f3f061be195d457.jpg?imwidth=768',
                'price' => 50.99,
                'description' => 'Loose-fit sweatshirt in lightweight, cotton-blend fabric with a generous, but not oversized silhouette. Round, ribbed neck, dropped shoulders, and long sleeves. Wide ribbing at cuffs and hem. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 77,
                'name' => 'Loose Fit Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/28/87/288752b9d61b48ff26843f5136bf032f5f26f8c5.jpg?imwidth=768',
                'price' => 10.99,
                'description' => 'Loose-fit sweatshirt in lightweight, cotton-blend fabric with a generous, but not oversized silhouette. Round, ribbed neck, dropped shoulders, and long sleeves. Wide ribbing at cuffs and hem. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'pink'
            ],
            [
                'id' => 78,
                'name' => 'Loose Fit Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/f6/14/f61414d82b53f6281be47385c5811de68447a12d.jpg?imwidth=768',
                'price' => 70.99,
                'description' => 'Loose-fit sweatshirt in lightweight, cotton-blend fabric with a generous, but not oversized silhouette. Round, ribbed neck, dropped shoulders, and long sleeves. Wide ribbing at cuffs and hem. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'pink'
            ],
            [
                'id' => 79,
                'name' => 'Loose Fit Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/7c/b4/7cb4803262ea1b1d383ac567e2a253a51c11b242.jpg?imwidth=768',
                'price' => 40.99,
                'description' => 'Loose-fit sweatshirt in lightweight, cotton-blend fabric with a generous, but not oversized silhouette. Round, ribbed neck, dropped shoulders, and long sleeves. Wide ribbing at cuffs and hem. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 80,
                'name' => 'Loose Fit Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/46/33/46331e6d35abf09d26b20981c6c883c894eab3dc.jpg?imwidth=768',
                'price' => 40.99,
                'description' => 'Loose-fit sweatshirt in lightweight, cotton-blend fabric with a generous, but not oversized silhouette. Round, ribbed neck, dropped shoulders, and long sleeves. Wide ribbing at cuffs and hem. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'yellow'
            ],
            [
                'id' => 81,
                'name' => 'Loose Fit Hoodie',
                'image' => 'https://image.hm.com/assets/hm/4e/ed/4eed5c1a69191639372a69e3344eb154dbd59259.jpg?imwidth=768',
                'price' => 35.99,
                'description' => 'Loose-fit sweatshirt hoodie in medium weight cotton-blend fabric with a generous, but not oversized silhouette. Jersey-lined, drawstring hood, dropped shoulders, long sleeves, and a kangaroo pocket. Wide ribbing at cuffs and hem. Soft, brushed inside',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 82,
                'name' => 'Loose Fit Hoodie',
                'image' => 'https://image.hm.com/assets/hm/75/0c/750cc44b179769a6c212f0bd132be814cfe76567.jpg?imwidth=768',
                'price' => 35.99,
                'description' => 'Loose-fit sweatshirt hoodie in medium weight cotton-blend fabric with a generous, but not oversized silhouette. Jersey-lined, drawstring hood, dropped shoulders, long sleeves, and a kangaroo pocket. Wide ribbing at cuffs and hem. Soft, brushed inside',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 83,
                'name' => 'Loose Fit Hoodie',
                'image' => 'https://image.hm.com/assets/hm/01/30/01301dcd95cec03a4231345e6efcf0e4f0b1abf9.jpg?imwidth=768',
                'price' => 35.99,
                'description' => 'Loose-fit sweatshirt hoodie in medium weight cotton-blend fabric with a generous, but not oversized silhouette. Jersey-lined, drawstring hood, dropped shoulders, long sleeves, and a kangaroo pocket. Wide ribbing at cuffs and hem. Soft, brushed inside',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 84,
                'name' => 'Loose Fit Hoodie',
                'image' => 'https://image.hm.com/assets/hm/7a/08/7a086dcf68be08960f5c6eabf287b419cea3d4c8.jpg?imwidth=768',
                'price' => 25.99,
                'description' => 'Loose-fit sweatshirt hoodie in medium weight cotton-blend fabric with a generous, but not oversized silhouette. Jersey-lined, drawstring hood, dropped shoulders, long sleeves, and a kangaroo pocket. Wide ribbing at cuffs and hem. Soft, brushed inside',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 85,
                'name' => 'Loose Fit Hoodie',
                'image' => 'https://image.hm.com/assets/hm/f7/4a/f74a8c3dd6156c21b9f430391177c2adebafb163.jpg?imwidth=768',
                'price' => 25.99,
                'description' => 'Loose-fit sweatshirt hoodie in medium weight cotton-blend fabric with a generous, but not oversized silhouette. Jersey-lined, drawstring hood, dropped shoulders, long sleeves, and a kangaroo pocket. Wide ribbing at cuffs and hem. Soft, brushed inside',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 86,
                'name' => 'Loose Fit Hoodie',
                'image' => 'https://image.hm.com/assets/hm/e9/66/e966c157e4819b45a642184655551ad752e9c346.jpg?imwidth=768',
                'price' => 25.99,
                'description' => 'Loose-fit sweatshirt hoodie in medium weight cotton-blend fabric with a generous, but not oversized silhouette. Jersey-lined, drawstring hood, dropped shoulders, long sleeves, and a kangaroo pocket. Wide ribbing at cuffs and hem. Soft, brushed inside',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'pink'
            ],
             /**MAN GYM */
             [
                'id' => 87,
                'name' => 'Mid-Length Shorts',
                'image' => 'https://image.hm.com/assets/hm/38/e5/38e59ae4f6c4b911234b536aa1cc8b87fd3c0e0c.jpg?imwidth=768',
                'price' => 28.99,
                'description' => 'Regular-fit, mid-length sports shorts in functional mesh made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Elasticized, drawstring waistband, side pockets, and a small slit at hems. Layered over liner bike shorts in jersey with an open cell phone leg pocket.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 88,
                'name' => 'Mid-Length 2-in-1 Sports',
                'image' => 'https://image.hm.com/assets/hm/12/c4/12c412799b04ff70a089e9d14e3c3cfce953b4b1.jpg?imwidth=768',
                'price' => 28.99,
                'description' => 'Regular-fit, mid-length sports shorts in functional mesh made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Elasticized, drawstring waistband, side pockets, and a small slit at hems. Layered over liner bike shorts in jersey with an open cell phone leg pocket.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 89,
                'name' => 'Mid-Length 2-in-1 Sports',
                'image' => 'https://image.hm.com/assets/hm/ba/cf/bacf005e11cff22113bda2a9da8e2801a5e2fa3c.jpg?imwidth=768',
                'price' => 28.99,
                'description' => 'Regular-fit, mid-length sports shorts in functional mesh made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Elasticized, drawstring waistband, side pockets, and a small slit at hems. Layered over liner bike shorts in jersey with an open cell phone leg pocket.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 90,
                'name' => 'Regular-Fit Sports',
                'image' => 'https://image.hm.com/assets/hm/62/58/6258b4370eabf66c1018d7e68f4b4e3d72c39a63.jpg?imwidth=768',
                'price' => 8.99,
                'description' => 'Regular-fit sports tank top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round, ribbed neck and slightly longer hem at back. Four-way stretch for added comfort and freedom of movement.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 91,
                'name' => 'Regular-Fit Sports',
                'image' => 'https://image.hm.com/assets/hm/b8/52/b852c6bf72e08201098afd08562db6bd5810248a.jpg?imwidth=768',
                'price' => 8.99,
                'description' => 'Regular-fit sports tank top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round, ribbed neck and slightly longer hem at back. Four-way stretch for added comfort and freedom of movement.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 92,
                'name' => 'Regular-Fit Sports',
                'image' => 'https://image.hm.com/assets/hm/5e/57/5e57549de495086b9c1893aa27aff5a2d9184a75.jpg?imwidth=768',
                'price' => 8.99,
                'description' => 'Regular-fit sports tank top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round, ribbed neck and slightly longer hem at back. Four-way stretch for added comfort and freedom of movement.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 93,
                'name' => 'Regular-Fit Sports ',
                'image' => 'https://image.hm.com/assets/hm/d6/7d/d67d245927d917a3156bd353ef610f80ee9a17b5.jpg?imwidth=768',
                'price' => 18.99,
                'description' => 'Regular-fit sports tank top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round, ribbed neck and slightly longer hem at back. Four-way stretch for added comfort and freedom of movement.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 94,
                'name' => 'Long Sports Shorts',
                'image' => 'https://image.hm.com/assets/hm/55/b9/55b92b24328d93c66cb1aab6e1111321512ecfee.jpg?imwidth=768',
                'price' => 23.99,
                'description' => 'Long, regular-fit sports shorts in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Covered elastic and concealed drawstring at waistband. Diagonal side pockets, small slit at one side of hems, and four-way stretch for added comfort and freedom of movement.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 95,
                'name' => 'Long Sports Shorts',
                'image' => 'https://image.hm.com/assets/hm/a9/20/a9202d64fc522551844a8407757c8e27dcab5d62.jpg?imwidth=768',
                'price' => 23.99,
                'description' => 'Long, regular-fit sports shorts in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Covered elastic and concealed drawstring at waistband. Diagonal side pockets, small slit at one side of hems, and four-way stretch for added comfort and freedom of movement.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 96,
                'name' => 'Long Sports Shorts',
                'image' => 'https://image.hm.com/assets/hm/f9/fd/f9fd60b8d5b9860180b8a9d8c0dcc2b7e3ee2e05.jpg?imwidth=768',
                'price' => 23.99,
                'description' => 'Long, regular-fit sports shorts in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Covered elastic and concealed drawstring at waistband. Diagonal side pockets, small slit at one side of hems, and four-way stretch for added comfort and freedom of movement.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 97,
                'name' => 'Long Sports Shorts',
                'image' => 'https://image.hm.com/assets/hm/68/4a/684a6220c598fcb5737e470565500882bee1cd29.jpg?imwidth=768',
                'price' => 13.99,
                'description' => 'Long, regular-fit sports shorts in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Covered elastic and concealed drawstring at waistband. Diagonal side pockets, small slit at one side of hems, and four-way stretch for added comfort and freedom of movement.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 98,
                'name' => 'Double-Layered Sports',
                'image' => 'https://image.hm.com/assets/hm/1d/52/1d5231114c55b415328bfba8319d4d73b039fd3d.jpg?imwidth=768',
                'price' => 53.99,
                'description' => 'Regular-fit, knee-length sports shorts in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Concealed drawstring and covered elastic at waistband, side pockets, and a slit at outer sides of hems. Lined with bike shorts in jersey with an open leg pocket.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 99,
                'name' => 'Double-Layered Sports',
                'image' => 'https://image.hm.com/assets/hm/cc/7c/cc7c7faaaccda162df794a6ca51027f4712fcf15.jpg?imwidth=768',
                'price' => 53.99,
                'description' => 'Regular-fit, knee-length sports shorts in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Concealed drawstring and covered elastic at waistband, side pockets, and a slit at outer sides of hems. Lined with bike shorts in jersey with an open leg pocket.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 100,
                'name' => 'Double-Layered Sports',
                'image' => 'https://image.hm.com/assets/hm/38/e0/38e07098e576a24c011e16529f568990fe3fc082.jpg?imwidth=768',
                'price' => 53.99,
                'description' => 'Regular-fit, knee-length sports shorts in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Concealed drawstring and covered elastic at waistband, side pockets, and a slit at outer sides of hems. Lined with bike shorts in jersey with an open leg pocket.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 101,
                'name' => 'Regular-Fit Sports',
                'image' => 'https://image.hm.com/assets/hm/fd/43/fd43ac823735cbf0018a77ad910ddde774d72205.jpg?imwidth=768',
                'price' => 13.99,
                'description' => 'Regular-fit sports tank top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round, ribbed neck and slightly longer hem at back. Four-way stretch for added comfort and freedom of movement.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 102,
                'name' => 'Regular-Fit Sports',
                'image' => 'https://image.hm.com/assets/hm/5e/57/5e57549de495086b9c1893aa27aff5a2d9184a75.jpg?imwidth=768',
                'price' => 13.99,
                'description' => 'Regular-fit sports tank top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round, ribbed neck and slightly longer hem at back. Four-way stretch for added comfort and freedom of movement.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],

            /**MAN PANTS */
            [
                'id' => 103,
                'name' => 'Fit Tailored Pants',
                'image' => 'https://image.hm.com/assets/hm/6d/28/6d28227ba40dc3e670575cc671c843e3be5498e8.jpg?imwidth=768',
                'price' => 31.99,
                'description' => 'Slim-fit tailored pants in soft, woven fabric with a fitted silhouette. Zip fly with button, side pockets, and welt back pockets with button. Creased legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'gray'
            ],
            [
                'id' => 104,
                'name' => 'Fit Tailored Pants',
                'image' => 'https://image.hm.com/assets/hm/47/94/4794cd3a04c62eabc5a22b64a06ae12e6622cabb.jpg?imwidth=768',
                'price' => 31.99,
                'description' => 'Slim-fit tailored pants in soft, woven fabric with a fitted silhouette. Zip fly with button, side pockets, and welt back pockets with button. Creased legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 105,
                'name' => 'Fit Tailored Pants',
                'image' => 'https://image.hm.com/assets/hm/28/72/28720ad23ef464e31c6682aab3a2a344192d8106.jpg?imwidth=768',
                'price' => 31.99,
                'description' => 'Slim-fit tailored pants in soft, woven fabric with a fitted silhouette. Zip fly with button, side pockets, and welt back pockets with button. Creased legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'gray'
            ],
            [
                'id' => 106,
                'name' => 'Fit Tailored Pants',
                'image' => 'https://image.hm.com/assets/hm/dd/0c/dd0c1c2a358254fa3ecaec96e1d53d5eccab71a9.jpg?imwidth=768',
                'price' => 31.99,
                'description' => 'Slim-fit tailored pants in soft, woven fabric with a fitted silhouette. Zip fly with button, side pockets, and welt back pockets with button. Creased legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 107,
                'name' => 'Fit Tailored Pants',
                'image' => 'https://image.hm.com/assets/hm/d3/17/d317a60cdfab4c15ca91553fb28b9a4c792c2ce4.jpg?imwidth=768',
                'price' => 31.99,
                'description' => 'Slim-fit tailored pants in soft, woven fabric with a fitted silhouette. Zip fly with button, side pockets, and welt back pockets with button. Creased legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 108,
                'name' => 'Fit Tailored Pants',
                'image' => 'https://image.hm.com/assets/hm/6e/ea/6eeacee958f7a988e297875ff20b04196535d5b4.jpg?imwidth=768',
                'price' => 31.99,
                'description' => 'Slim-fit tailored pants in soft, woven fabric with a fitted silhouette. Zip fly with button, side pockets, and welt back pockets with button. Creased legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 109,
                'name' => 'Regular Fit Sweatpants',
                'image' => 'https://image.hm.com/assets/hm/95/ab/95ab3726ee998ec694b869394b536c93e96542f7.jpg?imwidth=768',
                'price' => 11.99,
                'description' => 'Regular-fit, comfortable sweatpants in lightweight, cotton-blend fabric with a classic silhouette. Drawstring and covered elastic at waistband, side-seam pockets, and ribbed hems. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 110,
                'name' => 'Regular Fit Sweatpants',
                'image' => 'https://image.hm.com/assets/hm/f9/cd/f9cdb55accb0c386fe51400646fa546501b6ee70.jpg?imwidth=768',
                'price' => 11.99,
                'description' => 'Regular-fit, comfortable sweatpants in lightweight, cotton-blend fabric with a classic silhouette. Drawstring and covered elastic at waistband, side-seam pockets, and ribbed hems. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 111,
                'name' => 'Regular Fit Sweatpants',
                'image' => 'https://image.hm.com/assets/hm/f1/73/f1736868d24811edd23573f35598a0785e16a406.jpg?imwidth=768',
                'price' => 11.99,
                'description' => 'Regular-fit, comfortable sweatpants in lightweight, cotton-blend fabric with a classic silhouette. Drawstring and covered elastic at waistband, side-seam pockets, and ribbed hems. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 112,
                'name' => 'Regular Fit Sweatpants',
                'image' => 'https://image.hm.com/assets/hm/9d/6f/9d6f1bc5ceffc912c71cce00389db440ba45c247.jpg?imwidth=768',
                'price' => 11.99,
                'description' => 'Regular-fit, comfortable sweatpants in lightweight, cotton-blend fabric with a classic silhouette. Drawstring and covered elastic at waistband, side-seam pockets, and ribbed hems. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 113,
                'name' => 'Regular Fit Sweatpants',
                'image' => 'https://image.hm.com/assets/hm/d9/d5/d9d5b328821f31b1031d5fb765ecf43e6895bc64.jpg?imwidth=768',
                'price' => 24.99,
                'description' => 'Regular-fit, comfortable sweatpants in lightweight, cotton-blend fabric with a classic silhouette. Drawstring and covered elastic at waistband, side-seam pockets, and ribbed hems. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 114,
                'name' => 'Regular Fit Sweatpants',
                'image' => 'https://image.hm.com/assets/hm/ac/20/ac209aca738fe29ee524b5050f6ce24c3adb074a.jpg?imwidth=768',
                'price' => 24.99,
                'description' => 'Regular-fit, comfortable sweatpants in lightweight, cotton-blend fabric with a classic silhouette. Drawstring and covered elastic at waistband, side-seam pockets, and ribbed hems. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 115,
                'name' => 'Slim Fit Twill Pants',
                'image' => 'https://image.hm.com/assets/hm/fe/a2/fea2038aa8aebc89d5ad58ff7203205ce6c22914.jpg?imwidth=768',
                'price' => 19.99,
                'description' => 'Regular-fit, comfortable sweatpants in lightweight, cotton-blend fabric with a classic silhouette. Drawstring and covered elastic at waistband, side-seam pockets, and ribbed hems. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 116,
                'name' => 'Slim Fit Twill Pants',
                'image' => 'https://image.hm.com/assets/hm/be/87/be87adc9ffbb8302d7cf050af9cd905768dbd7c5.jpg?imwidth=768',
                'price' => 24.99,
                'description' => 'Regular-fit, comfortable sweatpants in lightweight, cotton-blend fabric with a classic silhouette. Drawstring and covered elastic at waistband, side-seam pockets, and ribbed hems. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 117,
                'name' => 'Slim Fit Twill Pants',
                'image' => 'https://image.hm.com/assets/hm/e4/33/e4331e18eb257908320808d047038bae463b414d.jpg?imwidth=768',
                'price' => 24.99,
                'description' => 'Regular-fit, comfortable sweatpants in lightweight, cotton-blend fabric with a classic silhouette. Drawstring and covered elastic at waistband, side-seam pockets, and ribbed hems. Soft, brushed inside.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],

            /**MAN SHORTS */

            [
                'id' => 118,
                'name' => 'Regular Fit Sweatshorts',
                'image' => 'https://image.hm.com/assets/hm/7e/e2/7ee2a6e79f37b9085ff88a6e6f8aa88f11a80848.jpg?imwidth=768',
                'price' => 14.99,
                'description' => 'Regular-fit sweatshorts in lightweight, cotton-blend fabric with a comfortable, classic silhouette. Elasticized, drawstring waistband, side pockets, and an open back pocket.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 119,
                'name' => 'Regular Fit Sweatshorts',
                'image' => 'https://image.hm.com/assets/hm/58/91/5891c58d3e920f5606cd581d20ae235b53dd6f04.jpg?imwidth=768',
                'price' => 14.99,
                'description' => 'Regular-fit sweatshorts in lightweight, cotton-blend fabric with a comfortable, classic silhouette. Elasticized, drawstring waistband, side pockets, and an open back pocket.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 120,
                'name' => 'Regular Fit Sweatshorts',
                'image' => 'https://image.hm.com/assets/hm/52/66/5266bbe45b01b7fee9d02ec43389ea376057a618.jpg?imwidth=768',
                'price' => 14.99,
                'description' => 'Regular-fit sweatshorts in lightweight, cotton-blend fabric with a comfortable, classic silhouette. Elasticized, drawstring waistband, side pockets, and an open back pocket.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 121,
                'name' => 'Regular Fit Sweatshorts',
                'image' => 'https://image.hm.com/assets/hm/ae/f5/aef5ab7c60995a5dc0082c03ef3fbb7cdde57b70.jpg?imwidth=768',
                'price' => 14.99,
                'description' => 'Regular-fit sweatshorts in lightweight, cotton-blend fabric with a comfortable, classic silhouette. Elasticized, drawstring waistband, side pockets, and an open back pocket.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 122,
                'name' => 'Regular Fit Sweatshorts',
                'image' => 'https://image.hm.com/assets/hm/5e/d6/5ed63f1bc5753932653c12af49de39d79f828bfd.jpg?imwidth=768',
                'price' => 14.99,
                'description' => 'Regular-fit sweatshorts in lightweight, cotton-blend fabric with a comfortable, classic silhouette. Elasticized, drawstring waistband, side pockets, and an open back pocket.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 123,
                'name' => 'Regular Fit Sweatshorts',
                'image' => 'https://image.hm.com/assets/hm/c9/84/c984ec476d50c8b28bdc05e13ec011f3b5810daa.jpg?imwidth=768',
                'price' => 14.99,
                'description' => 'Regular-fit sweatshorts in lightweight, cotton-blend fabric with a comfortable, classic silhouette. Elasticized, drawstring waistband, side pockets, and an open back pocket.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 124,
                'name' => 'Fit Linen-Blend Shorts',
                'image' => 'https://image.hm.com/assets/hm/20/80/2080997517d712f5b9a520dd612b5bbb0d0e7ece.jpg?imwidth=768',
                'price' => 8.99,
                'description' => 'Shorts in an airy, woven cotton and linen blend with a comfortable, classic silhouette. Drawstring and covered elastic at waistband and zip fly with button. Side pockets and a welt back pocket. Cotton and linen blends combine .',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 125,
                'name' => 'Fit Linen-Blend Shorts',
                'image' => 'https://image.hm.com/assets/hm/93/70/9370069dcd241ae49a40ad5a4582d9d57ba91682.jpg?imwidth=768',
                'price' => 8.99,
                'description' => 'Shorts in an airy, woven cotton and linen blend with a comfortable, classic silhouette. Drawstring and covered elastic at waistband and zip fly with button. Side pockets and a welt back pocket. Cotton and linen blends combine .',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 126,
                'name' => 'Fit Linen-Blend Shorts',
                'image' => 'https://image.hm.com/assets/hm/be/a2/bea2582b1e62bf894b49e787dcd4b8c7318c0cba.jpg?imwidth=768',
                'price' => 8.99,
                'description' => 'Shorts in an airy, woven cotton and linen blend with a comfortable, classic silhouette. Drawstring and covered elastic at waistband and zip fly with button. Side pockets and a welt back pocket. Cotton and linen blends combine .',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 127,
                'name' => 'Fit Linen-Blend Shorts',
                'image' => 'https://image.hm.com/assets/hm/fc/d8/fcd8adf1dafe85e62ec284a84895ae522e020802.jpg?imwidth=768',
                'price' => 8.99,
                'description' => 'Shorts in an airy, woven cotton and linen blend with a comfortable, classic silhouette. Drawstring and covered elastic at waistband and zip fly with button. Side pockets and a welt back pocket. Cotton and linen blends combine .',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 128,
                'name' => 'Fit Linen-Blend Shorts',
                'image' => 'https://image.hm.com/assets/hm/eb/25/eb259984f6f54e99581f4399627476c9cdeb0f10.jpg?imwidth=768',
                'price' => 8.99,
                'description' => 'Shorts in an airy, woven cotton and linen blend with a comfortable, classic silhouette. Drawstring and covered elastic at waistband and zip fly with button. Side pockets and a welt back pocket. Cotton and linen blends combine .',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 129,
                'name' => 'Denim Carpenter Shorts',
                'image' => 'https://image.hm.com/assets/hm/75/c9/75c903511b049a809e0d0ca14671df6926f8d6a5.jpg?imwidth=768',
                'price' => 58.99,
                'description' => 'Shorts in rigid cotton denim. Baggy fit from seat to hems with plenty of room around thighs. Regular waist and zip fly with button. Side pockets, open back pockets, a two-part patch pocket on one leg, and a hammer loop on other leg. Rounded, knee-length legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 130,
                'name' => 'Denim Carpenter Shorts',
                'image' => 'https://image.hm.com/assets/hm/de/c3/dec35cdb0d722c1fb1b7fd6294f2974d875874c9.jpg?imwidth=768',
                'price' => 58.99,
                'description' => 'Shorts in rigid cotton denim. Baggy fit from seat to hems with plenty of room around thighs. Regular waist and zip fly with button. Side pockets, open back pockets, a two-part patch pocket on one leg, and a hammer loop on other leg. Rounded, knee-length legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 131,
                'name' => 'Regular Fit Sweatshorts',
                'image' => 'https://image.hm.com/assets/hm/5e/d6/5ed63f1bc5753932653c12af49de39d79f828bfd.jpg?imwidth=768',
                'price' => 58.99,
                'description' => 'Shorts in rigid cotton denim. Baggy fit from seat to hems with plenty of room around thighs. Regular waist and zip fly with button. Side pockets, open back pockets, a two-part patch pocket on one leg, and a hammer loop on other leg. Rounded, knee-length legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 132,
                'name' => 'Regular Fit Sweatshorts',
                'image' => 'https://image.hm.com/assets/hm/52/66/5266bbe45b01b7fee9d02ec43389ea376057a618.jpg?imwidth=768',
                'price' => 58.99,
                'description' => 'Shorts in rigid cotton denim. Baggy fit from seat to hems with plenty of room around thighs. Regular waist and zip fly with button. Side pockets, open back pockets, a two-part patch pocket on one leg, and a hammer loop on other leg. Rounded, knee-length legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],


            /**SNEAKERS */

            [
                'id' => 133,
                'name' => 'Sneakers',
                'image' => 'https://image.hm.com/assets/hm/f1/a8/f1a865dfdf9c7d5f1beb0067dcff6111538a59ac.jpg?imwidth=768',
                'price' => 35.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 134,
                'name' => 'Sneakers',
                'image' => 'https://image.hm.com/assets/hm/6d/11/6d11d3ed801b82b3d9ffccc4cd2cc3de43aba1ff.jpg?imwidth=768',
                'price' => 35.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 135,
                'name' => 'Sneakers',
                'image' => 'https://image.hm.com/assets/hm/d9/60/d960b5161a1a8856a6c6186c3fbdda4c8b8cea5d.jpg?imwidth=768',
                'price' => 25.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 136,
                'name' => 'Sneakers',
                'image' => 'https://image.hm.com/assets/hm/db/54/db549701ada1868d8d1376dcbeb7848464f3b752.jpg?imwidth=768',
                'price' => 25.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 137,
                'name' => 'Sneakers',
                'image' => 'https://image.hm.com/assets/hm/c6/eb/c6eb14cb672386f7515076f19e7b9db2432c87fc.jpg?imwidth=768',
                'price' => 15.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 138,
                'name' => 'Sneakers',
                'image' => 'https://image.hm.com/assets/hm/a4/b2/a4b2c46ff028c2f3a2937c27862194c06eaaff22.jpg?imwidth=768',
                'price' => 15.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 139,
                'name' => 'Canvas sneakers',
                'image' => 'https://image.hm.com/assets/hm/54/ff/54ff53ed78ef8deb3c23a70f2b9487af3eb45f86.jpg?imwidth=768',
                'price' => 15.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 140,
                'name' => 'Canvas sneakers',
                'image' => 'https://image.hm.com/assets/hm/d6/c0/d6c08c108f9dfeb71b3096b4f0ece75f9252e3b6.jpg?imwidth=768',
                'price' => 15.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 141,
                'name' => 'Canvas sneakers',
                'image' => 'https://image.hm.com/assets/hm/e1/05/e105b0d297179b96ea365da765d1723e1595b1f1.jpg?imwidth=768',
                'price' => 15.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 142,
                'name' => 'Canvas sneakers',
                'image' => 'https://image.hm.com/assets/hm/fb/8d/fb8d78018ef31d1891a4e96c7ad7b0bb80348db8.jpg?imwidth=768',
                'price' => 5.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 143,
                'name' => 'Canvas sneakers',
                'image' => 'https://image.hm.com/assets/hm/6d/11/6d11d3ed801b82b3d9ffccc4cd2cc3de43aba1ff.jpg?imwidth=768',
                'price' => 45.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 144,
                'name' => 'Canvas sneakers',
                'image' => 'https://image.hm.com/assets/hm/f1/a8/f1a865dfdf9c7d5f1beb0067dcff6111538a59ac.jpg?imwidth=768',
                'price' => 45.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 145,
                'name' => 'Canvas sneakers',
                'image' => 'https://image.hm.com/assets/hm/41/4c/414c44940ea28ef71f6eb59dc6a6b2f1b087b3e8.jpg?imwidth=768',
                'price' => 45.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 146,
                'name' => 'Sneakers',
                'image' => 'https://image.hm.com/assets/hm/c1/ae/c1aea4ce1991934e2c351e7a7cc7bc23599f7186.jpg?imwidth=768',
                'price' => 45.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 147,
                'name' => 'Leather Sneakers',
                'image' => 'https://image.hm.com/assets/hm/08/11/0811c78b34412fadc7ee7657d0bb8875e438da28.jpg?imwidth=768',
                'price' => 75.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 148,
                'name' => 'Leather Sneakers',
                'image' => 'https://image.hm.com/assets/hm/92/60/9260ff2995e5a9319fd4f819e12fe3c32cd8e5f5.jpg?imwidth=768',
                'price' => 75.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 149,
                'name' => 'Leather Sneakers',
                'image' => 'https://image.hm.com/assets/hm/7d/b3/7db3b815c5e27352b595a9331be80753d6794747.jpg?imwidth=768',
                'price' => 75.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 150,
                'name' => 'Leather Sneakers',
                'image' => 'https://image.hm.com/assets/hm/5c/b1/5cb1f60c8f4775452f7207a114dcfd4c768d0101.jpg?imwidth=768',
                'price' => 75.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 151,
                'name' => 'Leather Sneakers',
                'image' => 'https://image.hm.com/assets/hm/fa/33/fa33875923a8d489af1ef2ccfabeae6b35bb36bd.jpg?imwidth=768',
                'price' => 75.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 152,
                'name' => 'Leather Sneakers',
                'image' => 'https://image.hm.com/assets/hm/31/c7/31c7bd988d9482025cdf079679f6f8d6d4b291a2.jpg?imwidth=768',
                'price' => 75.99,
                'description' => 'Skate shoes in mesh and coated fabric. Padded upper edge, padded tongue, and lacing at front. Loop at back. Terry lining, piqué insoles, and patterned soles. Sole thickness approx. 1 1/2 in.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],

            /**SANDALS */
            [
                'id' => 153,
                'name' => 'Leather Sandals',
                'image' => 'https://image.hm.com/assets/hm/66/f9/66f9894780c93f0f8b698601f79b4e6d006802aa.jpg?imwidth=768',
                'price' => 50.99,
                'description' => 'Sandals in soft leather with adjustable straps. Molded suede insoles and patterned soles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 154,
                'name' => 'Leather Sandals',
                'image' => 'https://image.hm.com/assets/hm/e8/61/e861ca2817692a6e1aae9c7f34006479e810208a.jpg?imwidth=768',
                'price' => 50.99,
                'description' => 'Sandals in soft leather with adjustable straps. Molded suede insoles and patterned soles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 155,
                'name' => 'Leather Sandals',
                'image' => 'https://image.hm.com/assets/hm/58/3c/583c0e14055718a4219bfbace78bd6a239217129.jpg?imwidth=768',
                'price' => 50.99,
                'description' => 'Sandals in soft leather with adjustable straps. Molded suede insoles and patterned soles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 156,
                'name' => 'Leather Sandals',
                'image' => 'https://image.hm.com/assets/hm/f9/ce/f9cedd30717ba0c134fb207247f2e69f3c8f027d.jpg?imwidth=768',
                'price' => 30.99,
                'description' => 'Sandals in soft leather with adjustable straps. Molded suede insoles and patterned soles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 157,
                'name' => 'Leather Sandals',
                'image' => 'https://image.hm.com/assets/hm/e8/61/e861ca2817692a6e1aae9c7f34006479e810208a.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Sandals in soft leather with adjustable straps. Molded suede insoles and patterned soles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 158,
                'name' => 'Leather Sandals',
                'image' => 'https://image.hm.com/assets/hm/58/3c/583c0e14055718a4219bfbace78bd6a239217129.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Sandals in soft leather with adjustable straps. Molded suede insoles and patterned soles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 159,
                'name' => 'Leather Sandals',
                'image' => 'https://image.hm.com/assets/hm/66/f9/66f9894780c93f0f8b698601f79b4e6d006802aa.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Sandals in soft leather with adjustable straps. Molded suede insoles and patterned soles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 160,
                'name' => 'Leather Sandals',
                'image' => 'https://image.hm.com/assets/hm/f9/ce/f9cedd30717ba0c134fb207247f2e69f3c8f027d.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Sandals in soft leather with adjustable straps. Molded suede insoles and patterned soles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 161,
                'name' => 'Slide Sandals',
                'image' => 'https://image.hm.com/assets/hm/0a/0e/0a0e23e4e699c7cc5c5f898bb8829ed9f77e033b.jpg?imwidth=768',
                'price' => 20.99,
                'description' => 'Sandals in soft leather with adjustable straps. Molded suede insoles and patterned soles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 162,
                'name' => 'Slide Sandals',
                'image' => 'https://image.hm.com/assets/hm/f1/8a/f18a9906236f6e1ce5775f10a48fc7f8d1bd5f37.jpg?imwidth=768',
                'price' => 20.99,
                'description' => 'Sandals in soft leather with adjustable straps. Molded suede insoles and patterned soles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 163,
                'name' => 'Suede  Sandals',
                'image' => 'https://image.hm.com/assets/hm/37/6c/376c937fdd91850a55400dc952978b6f6eecda7d.jpg?imwidth=768',
                'price' => 80.99,
                'description' => 'Sandals in soft leather with adjustable straps. Molded suede insoles and patterned soles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 164,
                'name' => 'Suede  Sandals',
                'image' => 'https://image.hm.com/assets/hm/37/6c/376c937fdd91850a55400dc952978b6f6eecda7d.jpg?imwidth=768',
                'price' => 80.99,
                'description' => 'Sandals in soft leather with adjustable straps. Molded suede insoles and patterned soles.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],



            /**woman accessories */

            [
                'id' => 165,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwd172a363/productimages/main_rect_base/593853C00_RGB.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 80.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 166,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw75491bc1/productimages/main_rect_base/563811C00_RGB.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 80.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'gold'
            ],
            [
                'id' => 167,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwe585f10e/productimages/modelshot_rect/561065C01_ABC123_MODEL_eCOM_01_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 50.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'gold'
            ],
            [
                'id' => 168,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwfba41739/productimages/modelshot_rect/Q324_E_PDP_MODEL_SINGLE_46_1x1_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 50.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 169,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw5f8b01ee/productimages/modelshot_rect/Q324_E_PDP_MODEL_SINGLE_47_1x1_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 150.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'gold'
            ],
            [
                'id' => 170,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwfce112ec/productimages/main_rect_base/599652C01_RGB.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 80.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 171,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw07a71361/productimages/modelshot_rect/590702HV_ABC123_MODEL_eCOM_01_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 80.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 172,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw28164eec/productimages/modelshot_rect/Q125_A_PDP_MODEL_SINGLE_41_1x1_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 80.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 173,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw47023a44/productimages/main_rect_base/592194C01_RGB.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 80.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 174,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw500a0f2a/productimages/modelshot_rect/599523C00_ABC123_MODEL_eCOM_01_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 80.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 175,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw99485860/productimages/singlepackshot/NAMPS0787_5.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 180.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],

            /**NECKLACES MEN WOMEN */
            [
                'id' => 176,
                'name' => 'Necklace',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwbc934277/productimages/modelshot_rect/Q225_C_PDP_Model_Single_26_1x1_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 180.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 177,
                'name' => 'Necklace',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw0561cf91/productimages/main_rect_base/PSG2483.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 180.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 178,
                'name' => 'Necklace',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw1d32a167/productimages/main_rect_base/PSG493_NEW.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 100.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 179,
                'name' => 'Necklace',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw3a25e05c/productimages/main_rect_base/PSG2481.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 80.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'gold'
            ],
            [
                'id' => 180,
                'name' => 'Necklace',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw5ab61664/productimages/main_rect_base/NAMPS0591-1.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 80.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'gold'
            ],
            [
                'id' => 181,
                'name' => 'Necklace',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw03157239/productimages/main_rect_base/NAMPS0437.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 50.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 182,
                'name' => 'Necklace',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw56f8437d/productimages/modelshot_rect/368638C00_ABC123_MODEL_eCOM_01_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 20.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 183,
                'name' => 'Necklace',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwcfe27a71/productimages/main_rect_base/NAMPS0463-.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 20.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 184,
                'name' => 'Necklace',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw92c949bc/productimages/NAMPS0512.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 20.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 185,
                'name' => 'Necklace',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwc59009ba/productimages/main_rect_base/Q125_A_Valentines_Giftset_03_V2_RGB.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 200.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 186,
                'name' => 'Necklace',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw92013915/productimages/singlepackshot/NAMPS0775_RGB.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 90.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],

            /**MEN BRACELET */
            [
                'id' => 187,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw856d8a49/productimages/main_rect_base/593361C01_RGB.jpg?q=50&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 90.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 188,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw1ce6450a/productimages/modelshot_rect/590745CBK-D_ABC123_MODEL_eCOM_01_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 90.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 189,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwb6a4bf3e/productimages/modelshot_rect/568777C01_ABC123_MODEL_eCOM_01_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 50.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'red'
            ],
            [
                'id' => 190,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwc4284625/productimages/modelshot_rect/598951C01-S_ABC123_MODEL_eCOM_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 50.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 191,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwd61eb960/productimages/modelshot_rect/Q224_D_PDP_Model_Single_105_1x1_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 7.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 192,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwb5e1be2b/productimages/modelshot_rect/Q424_G_PDP_MODEL_SINGLE_35_1x1_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 7.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 193,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw8a244d53/productimages/modelshot_rect/SS24_A_PDP_Model_Single_41_1x1_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 7.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],
            [
                'id' => 194,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw238f786a/productimages/modelshot_rect/Q124_B_PDP_Model_Single_59_1x1_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 17.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 195,
                'name' => 'Bracelet',
                'image' => 'https://ca.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw34833fc4/productimages/modelshot_rect/Q324_E+_PDP_MODEL_SINGLE_553637C01_YG_1x1_RGB.jpg?q=40&sfrm=png&bgcolor=F7F7F7&sw=318',
                'price' => 17.99,
                'description' => 'A sleek studded chain meets a heart-shaped clasp in this versatile bracelet thats ideal for creating a personalised, stylish look.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'silver'
            ],

                /**WOMEN TOPS */

            [
                'id' => 196,
                'name' => 'Cropped Microfiber Tank Top',
                'image' => 'https://image.hm.com/assets/hm/b7/ec/b7ec924e72a56e5524308396cb8bb688ffe79901.jpg?imwidth=768',
                'price' => 17.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 197,
                'name' => 'Cropped Microfiber Tank Top',
                'image' => 'https://image.hm.com/assets/hm/17/9f/179f2daf445bb50e2cbe4b09b024e0e1d239557c.jpg?imwidth=768',
                'price' => 17.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 198,
                'name' => 'Cropped Microfiber Tank Top',
                'image' => 'https://image.hm.com/assets/hm/ec/d3/ecd32653ef0bea866dcde5f1e55c6eb4f2448a28.jpg?imwidth=768',
                'price' => 20.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 199,
                'name' => 'Cropped Microfiber Tank Top',
                'image' => 'https://image.hm.com/assets/hm/df/83/df8325bebf9ae7451d1f3bbffe1f877634809e1f.jpg?imwidth=768',
                'price' => 67.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 200,
                'name' => 'Cropped Microfiber Tank Top',
                'image' => 'https://image.hm.com/assets/hm/31/97/31973e10f4ea83059b4bf7a2437581ad7ae67cbe.jpg?imwidth=768',
                'price' => 67.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 201,
                'name' => 'Top with Shoulder Pads',
                'image' => 'https://image.hm.com/assets/hm/e0/2b/e02bd35992b772a692855fb29639da5689ad530c.jpg?imwidth=768',
                'price' => 7.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 202,
                'name' => 'Top with Shoulder Pads',
                'image' => 'https://image.hm.com/assets/hm/d5/f9/d5f9af7f63df66a12dac5284184211693f0651dc.jpg?imwidth=768',
                'price' => 7.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 203,
                'name' => 'Top with Shoulder Pads',
                'image' => 'https://image.hm.com/assets/hm/c7/34/c7344f79730667a9d728b91575abddd13ce1c4e2.jpg?imwidth=768',
                'price' => 7.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 204,
                'name' => 'Top with Shoulder Pads',
                'image' => 'https://image.hm.com/assets/hm/ec/d3/ecd32653ef0bea866dcde5f1e55c6eb4f2448a28.jpg?imwidth=768',
                'price' => 70.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 205,
                'name' => 'Top with Shoulder Pads',
                'image' => 'https://image.hm.com/assets/hm/17/9f/179f2daf445bb50e2cbe4b09b024e0e1d239557c.jpg?imwidth=768',
                'price' => 70.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 206,
                'name' => 'Top with Shoulder Pads',
                'image' => 'https://image.hm.com/assets/hm/b7/ec/b7ec924e72a56e5524308396cb8bb688ffe79901.jpg?imwidth=768',
                'price' => 70.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 207,
                'name' => 'Top with Shoulder Pads',
                'image' => 'https://image.hm.com/assets/hm/88/7b/887bb715b8e12a1b6d1374b02bf08a27ac262dd4.jpg?imwidth=768',
                'price' => 70.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 208,
                'name' => '2-pack T-shirts',
                'image' => 'https://image.hm.com/assets/hm/a7/89/a7893a5c153cfb565f7bdd97bb3d6bb484718f76.jpg?imwidth=768',
                'price' => 70.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 209,
                'name' => '2-pack T-shirts',
                'image' => 'https://image.hm.com/assets/hm/33/79/3379204f4f1b0bbf3316bcb448216176ce3fab07.jpg?imwidth=768',
                'price' => 50.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 210,
                'name' => '2-pack T-shirts',
                'image' => 'https://image.hm.com/assets/hm/d4/2d/d42de6d1396c8faea3d3c59eb9636b9ca34ad64c.jpg?imwidth=768',
                'price' => 50.99,
                'description' => 'Cropped, fitted tank top in soft microfiber. Lined at front.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],

            /** WOMEN SWEATSHIRTS*/
            [
                'id' => 211,
                'name' => 'Oversized Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/89/d7/89d7564cff028e91e3957dfbc4805feef425de75.jpg?imwidth=768',
                'price' => 50.99,
                'description' => 'Oversized sweatshirt with a soft, brushed inside. Round neckline, dropped shoulders, and long sleeves. Ribbing at neckline, cuffs, and hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 212,
                'name' => 'Oversized Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/9b/f4/9bf47a90f16798f6c6f7986ca41f93d7da52a903.jpg?imwidth=768',
                'price' => 50.99,
                'description' => 'Oversized sweatshirt with a soft, brushed inside. Round neckline, dropped shoulders, and long sleeves. Ribbing at neckline, cuffs, and hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 213,
                'name' => 'Oversized Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/17/26/17268c1858e088032799057ca3ce6257aebb4e04.jpg?imwidth=768',
                'price' => 20.99,
                'description' => 'Oversized sweatshirt with a soft, brushed inside. Round neckline, dropped shoulders, and long sleeves. Ribbing at neckline, cuffs, and hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'gray'
            ],
            [
                'id' => 214,
                'name' => 'Oversized Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/1d/d6/1dd6130f4ac91ab070441b12eb34a13908d3a530.jpg?imwidth=768',
                'price' => 20.99,
                'description' => 'Oversized sweatshirt with a soft, brushed inside. Round neckline, dropped shoulders, and long sleeves. Ribbing at neckline, cuffs, and hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'gray'
            ],
            [
                'id' => 215,
                'name' => 'Oversized Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/53/23/5323cd97d70b9462251ecfcdfa689bb53d56d6cc.jpg?imwidth=768',
                'price' => 20.99,
                'description' => 'Oversized sweatshirt with a soft, brushed inside. Round neckline, dropped shoulders, and long sleeves. Ribbing at neckline, cuffs, and hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 216,
                'name' => 'Oversized Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/5b/f5/5bf544475baf425e511c2209bc58f44be2c11afa.jpg?imwidth=768',
                'price' => 90.99,
                'description' => 'Oversized sweatshirt with a soft, brushed inside. Round neckline, dropped shoulders, and long sleeves. Ribbing at neckline, cuffs, and hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'yellow'
            ],
            [
                'id' => 217,
                'name' => 'Oversized Sweatshirt',
                'image' => 'https://image.hm.com/assets/hm/14/a7/14a7365208bc8891770551517b233a23161b3311.jpg?imwidth=768',
                'price' => 90.99,
                'description' => 'Oversized sweatshirt with a soft, brushed inside. Round neckline, dropped shoulders, and long sleeves. Ribbing at neckline, cuffs, and hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 218,
                'name' => '2-piece Sweatsuit',
                'image' => 'https://image.hm.com/assets/hm/86/d8/86d839a9d29a29e18be53eeb22a54a6937436385.jpg?imwidth=768',
                'price' => 90.99,
                'description' => 'Oversized sweatshirt with a soft, brushed inside. Round neckline, dropped shoulders, and long sleeves. Ribbing at neckline, cuffs, and hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 219,
                'name' => '2-piece Sweatsuit',
                'image' => 'https://image.hm.com/assets/hm/76/fe/76fe49a286165b9349e90eb187ad4f9d6a63cf50.jpg?imwidth=768',
                'price' => 90.99,
                'description' => 'Oversized sweatshirt with a soft, brushed inside. Round neckline, dropped shoulders, and long sleeves. Ribbing at neckline, cuffs, and hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 220,
                'name' => '2-piece Sweatsuit',
                'image' => 'https://image.hm.com/assets/hm/bc/69/bc694d4f4642f36596c9cf1b1125fefad0ec4652.jpg?imwidth=768',
                'price' => 20.99,
                'description' => 'Oversized sweatshirt with a soft, brushed inside. Round neckline, dropped shoulders, and long sleeves. Ribbing at neckline, cuffs, and hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 221,
                'name' => '2-piece Sweatsuit',
                'image' => 'https://image.hm.com/assets/hm/f3/99/f3998d728fd9d2480dc9a858e3f036a4afe78234.jpg?imwidth=768',
                'price' => 20.99,
                'description' => 'Oversized sweatshirt with a soft, brushed inside. Round neckline, dropped shoulders, and long sleeves. Ribbing at neckline, cuffs, and hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 222,
                'name' => '2-piece Sweatsuit',
                'image' => 'https://image.hm.com/assets/hm/be/8d/be8d20b09eef1595bfcab42d814c30b666cfa31c.jpg?imwidth=768',
                'price' => 60.99,
                'description' => 'Oversized sweatshirt with a soft, brushed inside. Round neckline, dropped shoulders, and long sleeves. Ribbing at neckline, cuffs, and hem.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            /**WOMAN GYM */
            [
                'id' => 223,
                'name' => 'horts with SoftMove',
                'image' => 'https://image.hm.com/assets/hm/bd/c1/bdc1971d6ccbe28f16c38a52c9d8d3d92c2dd15d.jpg?imwidth=768',
                'price' => 20.99,
                'description' => 'Biking shorts in functional fabric made with SoftMove™ for the ultimate in softness and comfort plus contouring support, and DryMove™ to wick away moisture from skin. High waist and wide waistband panel.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'yellow'
            ],
            [
                'id' => 224,
                'name' => 'horts with SoftMove',
                'image' => 'https://image.hm.com/assets/hm/ca/86/ca86f131a6db9f24928b159033179e420d1a0fa1.jpg?imwidth=768',
                'price' => 20.99,
                'description' => 'Biking shorts in functional fabric made with SoftMove™ for the ultimate in softness and comfort plus contouring support, and DryMove™ to wick away moisture from skin. High waist and wide waistband panel.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 225,
                'name' => 'horts with SoftMove',
                'image' => 'https://image.hm.com/assets/hm/cc/06/cc065fccc2fd25ec502f4943306d8affdc824f2d.jpg?imwidth=768',
                'price' => 20.99,
                'description' => 'Biking shorts in functional fabric made with SoftMove™ for the ultimate in softness and comfort plus contouring support, and DryMove™ to wick away moisture from skin. High waist and wide waistband panel.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 226,
                'name' => 'horts with SoftMove',
                'image' => 'https://image.hm.com/assets/hm/38/f2/38f27866b3fc2185f2e6f2e79efb4b02c7c21eff.jpg?imwidth=768',
                'price' => 20.99,
                'description' => 'Biking shorts in functional fabric made with SoftMove™ for the ultimate in softness and comfort plus contouring support, and DryMove™ to wick away moisture from skin. High waist and wide waistband panel.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 227,
                'name' => 'Sports Crop Top',
                'image' => 'https://image.hm.com/assets/hm/4a/2e/4a2edda0c637d24aa9e5483bbd0892647231bc21.jpg?imwidth=768',
                'price' => 10.99,
                'description' => 'Short, slim-fit sports top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round neckline and short sleeves.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 228,
                'name' => 'Sports Crop Top',
                'image' => 'https://image.hm.com/assets/hm/f1/fe/f1fe018e261a581a8ae1869325fb1cce826231f1.jpg?imwidth=768',
                'price' => 10.99,
                'description' => 'Short, slim-fit sports top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round neckline and short sleeves.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 229,
                'name' => 'Sports Crop Top',
                'image' => 'https://image.hm.com/assets/hm/e9/c7/e9c709267acfd8334127ac2960f3f2e829ab2d54.jpg?imwidth=768',
                'price' => 10.99,
                'description' => 'Short, slim-fit sports top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round neckline and short sleeves.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 230,
                'name' => 'Sports Crop Top',
                'image' => 'https://image.hm.com/assets/hm/79/f3/79f3bf848314403dc9ab483d99879ece589a6126.jpg?imwidth=768',
                'price' => 10.99,
                'description' => 'Short, slim-fit sports top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round neckline and short sleeves.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 231,
                'name' => 'Sports Crop Top',
                'image' => 'https://image.hm.com/assets/hm/f1/71/f1717564f854976d188fc75cc98da16ddf5985cb.jpg?imwidth=768',
                'price' => 10.99,
                'description' => 'Short, slim-fit sports top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round neckline and short sleeves.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'yellow'
            ],
            [
                'id' => 232,
                'name' => 'Sports Crop Top',
                'image' => 'https://image.hm.com/assets/hm/bb/91/bb91dba04f3fb81945d50f3093680c70c04eed1d.jpg?imwidth=768',
                'price' => 30.99,
                'description' => 'Short, slim-fit sports top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round neckline and short sleeves.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 233,
                'name' => 'Sports Crop Top',
                'image' => 'https://image.hm.com/assets/hm/34/bb/34bb277c94efe06a2555a39ccfc53e3b43560d1a.jpg?imwidth=768',
                'price' => 30.99,
                'description' => 'Short, slim-fit sports top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round neckline and short sleeves.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 234,
                'name' => 'Sports Crop Top',
                'image' => 'https://image.hm.com/assets/hm/64/a0/64a09c84f2d4ba4fc403e99a24d4992221553840.jpg?imwidth=768',
                'price' => 30.99,
                'description' => 'Short, slim-fit sports top in functional fabric made with DryMove™ to wick away moisture from skin and keep you comfortably dry while moving. Round neckline and short sleeves.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],

/**WOMEN SHORTS */
            [
                'id' => 235,
                'name' => 'Linen-Blend Shorts',
                'image' => 'https://image.hm.com/assets/hm/e6/cf/e6cfbc5f13d325b8123412464c1ac8ee2cfbe328.jpg?imwidth=768',
                'price' => 22.99,
                'description' => 'Dressy, loose-fit shorts in an airy, woven linen blend. High waist, covered elastic at back of waistband, and zip fly with concealed button and hook-and-bar fastener. Diagonal side pockets, pleats at front, and creases at front and back.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 236,
                'name' => 'Linen-Blend Shorts',
                'image' => 'https://image.hm.com/assets/hm/2e/b9/2eb9c429b94589a30bd99c29fa300a405100730f.jpg?imwidth=768',
                'price' => 22.99,
                'description' => 'Dressy, loose-fit shorts in an airy, woven linen blend. High waist, covered elastic at back of waistband, and zip fly with concealed button and hook-and-bar fastener. Diagonal side pockets, pleats at front, and creases at front and back.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 237,
                'name' => 'Linen-Blend Shorts',
                'image' => 'https://image.hm.com/assets/hm/3f/4e/3f4e7cd6a8720fb27bc75ebea1c46a8b339a87cc.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Dressy, loose-fit shorts in an airy, woven linen blend. High waist, covered elastic at back of waistband, and zip fly with concealed button and hook-and-bar fastener. Diagonal side pockets, pleats at front, and creases at front and back.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 238,
                'name' => 'Linen-Blend Shorts',
                'image' => 'https://image.hm.com/assets/hm/7b/a7/7ba7ff32bec80b9e8c533a535fa2af5aa1dd9f1e.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Dressy, loose-fit shorts in an airy, woven linen blend. High waist, covered elastic at back of waistband, and zip fly with concealed button and hook-and-bar fastener. Diagonal side pockets, pleats at front, and creases at front and back.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 239,
                'name' => 'Linen-Blend Shorts',
                'image' => 'https://image.hm.com/assets/hm/a3/8a/a38abb0664eba633a94750aa09007ac18bb5b6e1.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Dressy, loose-fit shorts in an airy, woven linen blend. High waist, covered elastic at back of waistband, and zip fly with concealed button and hook-and-bar fastener. Diagonal side pockets, pleats at front, and creases at front and back.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'brown'
            ],
            [
                'id' => 240,
                'name' => 'Denim Shorts',
                'image' => 'https://image.hm.com/assets/hm/a8/6a/a86a5a5fe2722d0a48aa33abf7eb184c0a40a368.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Dressy, loose-fit shorts in an airy, woven linen blend. High waist, covered elastic at back of waistband, and zip fly with concealed button and hook-and-bar fastener. Diagonal side pockets, pleats at front, and creases at front and back.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 241,
                'name' => 'Denim Shorts',
                'image' => 'https://image.hm.com/assets/hm/e2/16/e216916077512b7520ff30be63b83e9b35f011d5.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Dressy, loose-fit shorts in an airy, woven linen blend. High waist, covered elastic at back of waistband, and zip fly with concealed button and hook-and-bar fastener. Diagonal side pockets, pleats at front, and creases at front and back.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 242,
                'name' => 'Denim Shorts',
                'image' => 'https://image.hm.com/assets/hm/d5/6f/d56f980739625f896b05fff488289c2e8f3a078e.jpg?imwidth=768',
                'price' => 32.99,
                'description' => 'Dressy, loose-fit shorts in an airy, woven linen blend. High waist, covered elastic at back of waistband, and zip fly with concealed button and hook-and-bar fastener. Diagonal side pockets, pleats at front, and creases at front and back.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 243,
                'name' => 'Denim Shorts',
                'image' => 'https://image.hm.com/assets/hm/0f/a2/0fa29d6227fcaa1fe2560d3b0ce9e3d545acc40a.jpg?imwidth=768',
                'price' => 32.99,
                'description' => 'Dressy, loose-fit shorts in an airy, woven linen blend. High waist, covered elastic at back of waistband, and zip fly with concealed button and hook-and-bar fastener. Diagonal side pockets, pleats at front, and creases at front and back.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 244,
                'name' => 'Denim Shorts',
                'image' => 'https://image.hm.com/assets/hm/db/36/db36375f671cb408fb2ccacca964261043df084b.jpg?imwidth=768',
                'price' => 32.99,
                'description' => 'Dressy, loose-fit shorts in an airy, woven linen blend. High waist, covered elastic at back of waistband, and zip fly with concealed button and hook-and-bar fastener. Diagonal side pockets, pleats at front, and creases at front and back.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],

            /**WOMEN SWEATPANTS */
            [
                'id' => 245,
                'name' => 'Linen-Blend Pants',
                'image' => 'https://image.hm.com/assets/hm/94/9c/949cc0e65d3b3fb379022595e1e377336de02700.jpg?imwidth=768',
                'price' => 32.99,
                'description' => 'Loose-fit pants in an airy, woven linen blend. High waist, elasticized waistband with narrow drawstring, and discreet side pockets. Straight legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 246,
                'name' => 'Linen-Blend Pants',
                'image' => 'https://image.hm.com/assets/hm/63/77/63772af67d3f21421cb8728193e954bf132c3077.jpg?imwidth=768',
                'price' => 32.99,
                'description' => 'Loose-fit pants in an airy, woven linen blend. High waist, elasticized waistband with narrow drawstring, and discreet side pockets. Straight legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 247,
                'name' => 'Linen-Blend Pants',
                'image' => 'https://image.hm.com/assets/hm/0c/81/0c81d6b9ee288e62356e6d2e7eb2bb60c6748a54.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Loose-fit pants in an airy, woven linen blend. High waist, elasticized waistband with narrow drawstring, and discreet side pockets. Straight legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'grey'
            ],
            [
                'id' => 248,
                'name' => 'Linen-Blend Pants',
                'image' => 'https://image.hm.com/assets/hm/9a/47/9a472275d6d59a8b634a9b4ce3df6b52db87f0d8.jpg?imwidth=768',
                'price' => 12.99,
                'description' => 'Loose-fit pants in an airy, woven linen blend. High waist, elasticized waistband with narrow drawstring, and discreet side pockets. Straight legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],
            [
                'id' => 249,
                'name' => 'Linen-Blend Pants',
                'image' => 'https://image.hm.com/assets/hm/cb/d1/cbd19db79890b5f4326b8afd24d6293f679f3ab5.jpg?imwidth=768',
                'price' => 80.99,
                'description' => 'Loose-fit pants in an airy, woven linen blend. High waist, elasticized waistband with narrow drawstring, and discreet side pockets. Straight legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'blue'
            ],
            [
                'id' => 250,
                'name' => 'Linen-Blend Pants',
                'image' => 'https://image.hm.com/assets/hm/4d/c9/4dc93f935bd25478f3c35d2ac4e14a7f6d409b1f.jpg?imwidth=768',
                'price' => 80.99,
                'description' => 'Loose-fit pants in an airy, woven linen blend. High waist, elasticized waistband with narrow drawstring, and discreet side pockets. Straight legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'white'
            ],
            [
                'id' => 251,
                'name' => 'Linen-Blend Pants',
                'image' => 'https://image.hm.com/assets/hm/41/b3/41b34674d86d44d47052cee4668d4a694f2f4dac.jpg?imwidth=768',
                'price' => 80.99,
                'description' => 'Loose-fit pants in an airy, woven linen blend. High waist, elasticized waistband with narrow drawstring, and discreet side pockets. Straight legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 252,
                'name' => 'Linen-Blend Pants',
                'image' => 'https://image.hm.com/assets/hm/07/b9/07b95f9d222d45014fdf2a3cbd3aeccc00d881b9.jpg?imwidth=768',
                'price' => 60.99,
                'description' => 'Loose-fit pants in an airy, woven linen blend. High waist, elasticized waistband with narrow drawstring, and discreet side pockets. Straight legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 253,
                'name' => 'Low-waist Twill Pants',
                'image' => 'https://image.hm.com/assets/hm/e7/27/e727d364766a9a51995bf0d1b57b2b7485611c6d.jpg?imwidth=768',
                'price' => 60.99,
                'description' => 'Pants in cotton twill. Low waist, zip fly with button, mock front pockets, and regular back pockets. Wide legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 254,
                'name' => 'Low-waist Twill Pants',
                'image' => 'https://image.hm.com/assets/hm/a7/df/a7df49558e5ea0c28b006fbafdef0aa8050aeb25.jpg?imwidth=768',
                'price' => 6.99,
                'description' => 'Pants in cotton twill. Low waist, zip fly with button, mock front pockets, and regular back pockets. Wide legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'black'
            ],
            [
                'id' => 255,
                'name' => 'Low-waist Twill Pants',
                'image' => 'https://image.hm.com/assets/hm/25/f1/25f113ccbe8a472668c279e038f1587a695dfb08.jpg?imwidth=768',
                'price' => 6.99,
                'description' => 'Pants in cotton twill. Low waist, zip fly with button, mock front pockets, and regular back pockets. Wide legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'beige'
            ],
            [
                'id' => 256,
                'name' => 'Low-waist Twill Pants',
                'image' => 'https://image.hm.com/assets/hm/de/0d/de0de510665bb1026ea715f49bd8af017c25f6d4.jpg?imwidth=768',
                'price' => 6.99,
                'description' => 'Pants in cotton twill. Low waist, zip fly with button, mock front pockets, and regular back pockets. Wide legs.',
                'manufacturer_id'=>1,
                'created_at' => now(),
                'updated_at' => now(),
                'color' => 'green'
            ],



        ]);
    }
}
