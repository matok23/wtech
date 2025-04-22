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
            
                ['id'=>1,  'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>1, 'category_id'=>3],
                ['id'=>2,  'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>1, 'category_id'=>8],
                ['id'=>3,  'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>1, 'category_id'=>2],
                ['id'=>19, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>1, 'category_id'=>1],
            
                ['id'=>4,  'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>2, 'category_id'=>3],
                ['id'=>5,  'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>2, 'category_id'=>2],
                ['id'=>6,  'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>2, 'category_id'=>8],
                ['id'=>20, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>2, 'category_id'=>1],
            
                ['id'=>7,  'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>3, 'category_id'=>3],
                ['id'=>8,  'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>3, 'category_id'=>2],
                ['id'=>9,  'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>3, 'category_id'=>8],
                ['id'=>21, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>3, 'category_id'=>1],
            
                ['id'=>10, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>4, 'category_id'=>3],
                ['id'=>11, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>4, 'category_id'=>2],
                ['id'=>12, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>4, 'category_id'=>8],
                ['id'=>22, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>4, 'category_id'=>1],
            
                ['id'=>13, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>5, 'category_id'=>3],
                ['id'=>14, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>5, 'category_id'=>2],
                ['id'=>15, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>5, 'category_id'=>8],
                ['id'=>23, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>5, 'category_id'=>1],
            
                ['id'=>16, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>6, 'category_id'=>3],
                ['id'=>17, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>6, 'category_id'=>2],
                ['id'=>18, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>6, 'category_id'=>8],
                ['id'=>24, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>6, 'category_id'=>1],
            
                ['id'=>25, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>7, 'category_id'=>3],
                ['id'=>26, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>7, 'category_id'=>2],
                ['id'=>27, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>7, 'category_id'=>8],
                ['id'=>28, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>7, 'category_id'=>1],

                ['id'=>29, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>8,  'category_id'=>3],
                ['id'=>30, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>8,  'category_id'=>2],
                ['id'=>31, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>8,  'category_id'=>8],
                ['id'=>32, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>8,  'category_id'=>1],
            
                ['id'=>33, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>9,  'category_id'=>3],
                ['id'=>34, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>9,  'category_id'=>2],
                ['id'=>35, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>9,  'category_id'=>8],
                ['id'=>36, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>9,  'category_id'=>1],
            
                ['id'=>37, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>10, 'category_id'=>3],
                ['id'=>38, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>10, 'category_id'=>2],
                ['id'=>39, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>10, 'category_id'=>8],
                ['id'=>40, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>10, 'category_id'=>1],
            
                ['id'=>41, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>11, 'category_id'=>3],
                ['id'=>42, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>11, 'category_id'=>2],
                ['id'=>43, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>11, 'category_id'=>8],
                ['id'=>44, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>11, 'category_id'=>1],
            
                ['id'=>45, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>12, 'category_id'=>3],
                ['id'=>46, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>12, 'category_id'=>2],
                ['id'=>47, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>12, 'category_id'=>8],
                ['id'=>48, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>12, 'category_id'=>1],
            
                ['id'=>49, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>13, 'category_id'=>3],
                ['id'=>50, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>13, 'category_id'=>2],
                ['id'=>51, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>13, 'category_id'=>8],
                ['id'=>52, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>13, 'category_id'=>1],
            
                ['id'=>53, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>14, 'category_id'=>3],
                ['id'=>54, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>14, 'category_id'=>2],
                ['id'=>55, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>14, 'category_id'=>8],
                ['id'=>56, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>14, 'category_id'=>1],
            
                ['id'=>57, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>15, 'category_id'=>3],
                ['id'=>58, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>15, 'category_id'=>2],
                ['id'=>59, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>15, 'category_id'=>8],
                ['id'=>60, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>15, 'category_id'=>1],
            
            
                ['id'=>61, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>16, 'category_id'=>3],
                ['id'=>62, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>16, 'category_id'=>2],
                ['id'=>63, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>16, 'category_id'=>8],
                ['id'=>64, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>16, 'category_id'=>1],
            
                ['id'=>65, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>17, 'category_id'=>3],
                ['id'=>66, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>17, 'category_id'=>2],
                ['id'=>67, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>17, 'category_id'=>8],
                ['id'=>68, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>17, 'category_id'=>1],
            
                ['id'=>69, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>18, 'category_id'=>3],
                ['id'=>70, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>18, 'category_id'=>2],
                ['id'=>71, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>18, 'category_id'=>8],
                ['id'=>72, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>18, 'category_id'=>1],
            
                ['id'=>73, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>19, 'category_id'=>3],
                ['id'=>74, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>19, 'category_id'=>2],
                ['id'=>75, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>19, 'category_id'=>8],
                ['id'=>76, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>19, 'category_id'=>1],
            
                ['id'=>77, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>20, 'category_id'=>3],
                ['id'=>78, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>20, 'category_id'=>2],
                ['id'=>79, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>20, 'category_id'=>8],
                ['id'=>80, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>20, 'category_id'=>1],
        
                ['id'=>81, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>21, 'category_id'=>3],
                ['id'=>82, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>21, 'category_id'=>2],
                ['id'=>83, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>21, 'category_id'=>9],
                ['id'=>84, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>21, 'category_id'=>1],
            
                ['id'=>85, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>22, 'category_id'=>3],
                ['id'=>86, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>22, 'category_id'=>2],
                ['id'=>87, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>22, 'category_id'=>9],
                ['id'=>88, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>22, 'category_id'=>1],
            
                ['id'=>89, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>23, 'category_id'=>3],
                ['id'=>90, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>23, 'category_id'=>2],
                ['id'=>91, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>23, 'category_id'=>9],
                ['id'=>92, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>23, 'category_id'=>1],
            
                ['id'=>93, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>24, 'category_id'=>3],
                ['id'=>94, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>24, 'category_id'=>2],
                ['id'=>95, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>24, 'category_id'=>9],
                ['id'=>96, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>24, 'category_id'=>1],
            
                ['id'=>97, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>25, 'category_id'=>3],
                ['id'=>98, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>25, 'category_id'=>2],
                ['id'=>99, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>25, 'category_id'=>9],
                ['id'=>100, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>25, 'category_id'=>1],
            
                ['id'=>101, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>26, 'category_id'=>3],
                ['id'=>102, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>26, 'category_id'=>2],
                ['id'=>103, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>26, 'category_id'=>9],
                ['id'=>104, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>26, 'category_id'=>1],
            
                ['id'=>105, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>27, 'category_id'=>3],
                ['id'=>106, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>27, 'category_id'=>2],
                ['id'=>107, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>27, 'category_id'=>9],
                ['id'=>108, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>27, 'category_id'=>1],
            
                ['id'=>109, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>28, 'category_id'=>3],
                ['id'=>110, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>28, 'category_id'=>2],
                ['id'=>111, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>28, 'category_id'=>9],
                ['id'=>112, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>28, 'category_id'=>1],
            
                ['id'=>113, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>29, 'category_id'=>3],
                ['id'=>114, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>29, 'category_id'=>2],
                ['id'=>115, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>29, 'category_id'=>9],
                ['id'=>116, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>29, 'category_id'=>1],
            
                ['id'=>117, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>30, 'category_id'=>3],
                ['id'=>118, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>30, 'category_id'=>2],
                ['id'=>119, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>30, 'category_id'=>9],
                ['id'=>120, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>30, 'category_id'=>1],
            
                ['id'=>121, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>31, 'category_id'=>3],
                ['id'=>122, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>31, 'category_id'=>2],
                ['id'=>123, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>31, 'category_id'=>9],
                ['id'=>124, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>31, 'category_id'=>1],
            
                ['id'=>125, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>32, 'category_id'=>3],
                ['id'=>126, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>32, 'category_id'=>2],
                ['id'=>127, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>32, 'category_id'=>9],
                ['id'=>128, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>32, 'category_id'=>1],
            
                ['id'=>129, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>33, 'category_id'=>3],
                ['id'=>130, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>33, 'category_id'=>2],
                ['id'=>131, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>33, 'category_id'=>9],
                ['id'=>132, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>33, 'category_id'=>1],
            
                ['id'=>133, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>34, 'category_id'=>3],
                ['id'=>134, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>34, 'category_id'=>2],
                ['id'=>135, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>34, 'category_id'=>9],
                ['id'=>136, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>34, 'category_id'=>1],
            
                ['id'=>137, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>35, 'category_id'=>3],
                ['id'=>138, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>35, 'category_id'=>2],
                ['id'=>139, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>35, 'category_id'=>9],
                ['id'=>140, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>35, 'category_id'=>1],
            
                ['id'=>141, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>36, 'category_id'=>3],
                ['id'=>142, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>36, 'category_id'=>2],
                ['id'=>143, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>36, 'category_id'=>9],
                ['id'=>144, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>36, 'category_id'=>1],
            
                ['id'=>145, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>37, 'category_id'=>3],
                ['id'=>146, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>37, 'category_id'=>2],
                ['id'=>147, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>37, 'category_id'=>9],
                ['id'=>148, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>37, 'category_id'=>1],
            
                ['id'=>149, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>38, 'category_id'=>3],
                ['id'=>150, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>38, 'category_id'=>2],
                ['id'=>151, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>38, 'category_id'=>9],
                ['id'=>152, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>38, 'category_id'=>1],
            
                ['id'=>153, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>39, 'category_id'=>3],
                ['id'=>154, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>39, 'category_id'=>2],
                ['id'=>155, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>39, 'category_id'=>9],
                ['id'=>156, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>39, 'category_id'=>1],
            
                ['id'=>157, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>40, 'category_id'=>3],
                ['id'=>158, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>40, 'category_id'=>2],
                ['id'=>159, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>40, 'category_id'=>9],
                ['id'=>160, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>40, 'category_id'=>1],
            
                ['id'=>161, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>41, 'category_id'=>3],
                ['id'=>162, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>41, 'category_id'=>2],
                ['id'=>163, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>41, 'category_id'=>10],
                ['id'=>164, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>41, 'category_id'=>1],
            
                ['id'=>165, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>42, 'category_id'=>3],
                ['id'=>166, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>42, 'category_id'=>2],
                ['id'=>167, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>42, 'category_id'=>10],
                ['id'=>168, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>42, 'category_id'=>1],
            
                ['id'=>169, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>43, 'category_id'=>3],
                ['id'=>170, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>43, 'category_id'=>2],
                ['id'=>171, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>43, 'category_id'=>10],
                ['id'=>172, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>43, 'category_id'=>1],
            
                ['id'=>173, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>44, 'category_id'=>3],
                ['id'=>174, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>44, 'category_id'=>2],
                ['id'=>175, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>44, 'category_id'=>10],
                ['id'=>176, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>44, 'category_id'=>1],
            
                ['id'=>177, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>45, 'category_id'=>3],
                ['id'=>178, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>45, 'category_id'=>2],
                ['id'=>179, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>45, 'category_id'=>10],
                ['id'=>180, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>45, 'category_id'=>1],
            
                ['id'=>181, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>46, 'category_id'=>3],
                ['id'=>182, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>46, 'category_id'=>2],
                ['id'=>183, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>46, 'category_id'=>10],
                ['id'=>184, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>46, 'category_id'=>1],
            
                ['id'=>185, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>47, 'category_id'=>3],
                ['id'=>186, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>47, 'category_id'=>2],
                ['id'=>187, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>47, 'category_id'=>10],
                ['id'=>188, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>47, 'category_id'=>1],
            
                ['id'=>189, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>48, 'category_id'=>3],
                ['id'=>190, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>48, 'category_id'=>2],
                ['id'=>191, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>48, 'category_id'=>10],
                ['id'=>192, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>48, 'category_id'=>1],
            
                ['id'=>193, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>49, 'category_id'=>3],
                ['id'=>194, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>49, 'category_id'=>2],
                ['id'=>195, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>49, 'category_id'=>10],
                ['id'=>196, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>49, 'category_id'=>1],
            
                ['id'=>197, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>50, 'category_id'=>3],
                ['id'=>198, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>50, 'category_id'=>2],
                ['id'=>199, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>50, 'category_id'=>10],
                ['id'=>200, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>50, 'category_id'=>1],
            
                ['id'=>201, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>51, 'category_id'=>3],
                ['id'=>202, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>51, 'category_id'=>2],
                ['id'=>203, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>51, 'category_id'=>10],
                ['id'=>204, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>51, 'category_id'=>1],
            
                ['id'=>205, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>52, 'category_id'=>3],
                ['id'=>206, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>52, 'category_id'=>2],
                ['id'=>207, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>52, 'category_id'=>10],
                ['id'=>208, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>52, 'category_id'=>1],
            
                ['id'=>209, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>53, 'category_id'=>3],
                ['id'=>210, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>53, 'category_id'=>2],
                ['id'=>211, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>53, 'category_id'=>10],
                ['id'=>212, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>53, 'category_id'=>1],
            
                ['id'=>213, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>54, 'category_id'=>3],
                ['id'=>214, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>54, 'category_id'=>2],
                ['id'=>215, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>54, 'category_id'=>10],
                ['id'=>216, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>54, 'category_id'=>1],
            
                ['id'=>217, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>55, 'category_id'=>3],
                ['id'=>218, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>55, 'category_id'=>2],
                ['id'=>219, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>55, 'category_id'=>10],
                ['id'=>220, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>55, 'category_id'=>1],
            
                ['id'=>221, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>56, 'category_id'=>3],
                ['id'=>222, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>56, 'category_id'=>2],
                ['id'=>223, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>56, 'category_id'=>10],
                ['id'=>224, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>56, 'category_id'=>1],
                
                ['id'=>225, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>57, 'category_id'=>2],
                ['id'=>226, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>57, 'category_id'=>4],
                ['id'=>227, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>57, 'category_id'=>11],
            
                ['id'=>228, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>58, 'category_id'=>2],
                ['id'=>229, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>58, 'category_id'=>4],
                ['id'=>230, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>58, 'category_id'=>11],
            
                ['id'=>231, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>59, 'category_id'=>2],
                ['id'=>232, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>59, 'category_id'=>4],
                ['id'=>233, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>59, 'category_id'=>11],
            
                ['id'=>234, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>60, 'category_id'=>2],
                ['id'=>235, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>60, 'category_id'=>4],
                ['id'=>236, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>60, 'category_id'=>11],
            
                ['id'=>237, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>61, 'category_id'=>2],
                ['id'=>238, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>61, 'category_id'=>4],
                ['id'=>239, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>61, 'category_id'=>11],
            
                ['id'=>240, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>62, 'category_id'=>2],
                ['id'=>241, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>62, 'category_id'=>4],
                ['id'=>242, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>62, 'category_id'=>11],
            
                ['id'=>243, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>63, 'category_id'=>2],
                ['id'=>244, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>63, 'category_id'=>4],
                ['id'=>245, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>63, 'category_id'=>11],
            
                ['id'=>246, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>64, 'category_id'=>2],
                ['id'=>247, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>64, 'category_id'=>4],
                ['id'=>248, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>64, 'category_id'=>11],
            
                ['id'=>249, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>65, 'category_id'=>2],
                ['id'=>250, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>65, 'category_id'=>4],
                ['id'=>251, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>65, 'category_id'=>11],
            
                ['id'=>252, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>66, 'category_id'=>2],
                ['id'=>253, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>66, 'category_id'=>4],
                ['id'=>254, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>66, 'category_id'=>11],
            
                ['id'=>255, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>67, 'category_id'=>2],
                ['id'=>256, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>67, 'category_id'=>4],
                ['id'=>257, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>67, 'category_id'=>11],
            
                ['id'=>258, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>68, 'category_id'=>2],
                ['id'=>259, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>68, 'category_id'=>4],
                ['id'=>260, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>68, 'category_id'=>11],
            
                ['id'=>261, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>69, 'category_id'=>2],
                ['id'=>262, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>69, 'category_id'=>4],
                ['id'=>263, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>69, 'category_id'=>11],
            
                ['id'=>264, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>70, 'category_id'=>2],
                ['id'=>265, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>70, 'category_id'=>4],
                ['id'=>266, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>70, 'category_id'=>11],
            
                ['id'=>267, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>71, 'category_id'=>2],
                ['id'=>268, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>71, 'category_id'=>4],
                ['id'=>269, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>71, 'category_id'=>11],
            
                ['id'=>270, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>72, 'category_id'=>2],
                ['id'=>271, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>72, 'category_id'=>4],
                ['id'=>272, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>72, 'category_id'=>12],
            
                ['id'=>273, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>73, 'category_id'=>2],
                ['id'=>274, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>73, 'category_id'=>4],
                ['id'=>275, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>73, 'category_id'=>12],
            
                ['id'=>276, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>74, 'category_id'=>2],
                ['id'=>277, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>74, 'category_id'=>4],
                ['id'=>278, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>74, 'category_id'=>12],
            
                ['id'=>279, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>75, 'category_id'=>2],
                ['id'=>280, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>75, 'category_id'=>4],
                ['id'=>281, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>75, 'category_id'=>12],
            
                ['id'=>282, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>76, 'category_id'=>2],
                ['id'=>283, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>76, 'category_id'=>4],
                ['id'=>284, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>76, 'category_id'=>12],
            
                ['id'=>285, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>77, 'category_id'=>2],
                ['id'=>286, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>77, 'category_id'=>4],
                ['id'=>287, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>77, 'category_id'=>12],
            
                ['id'=>288, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>78, 'category_id'=>2],
                ['id'=>289, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>78, 'category_id'=>4],
                ['id'=>290, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>78, 'category_id'=>12],
            
                ['id'=>291, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>79, 'category_id'=>2],
                ['id'=>292, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>79, 'category_id'=>4],
                ['id'=>293, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>79, 'category_id'=>12],
            
                ['id'=>294, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>80, 'category_id'=>2],
                ['id'=>295, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>80, 'category_id'=>4],
                ['id'=>296, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>80, 'category_id'=>12],
            
                ['id'=>297, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>81, 'category_id'=>2],
                ['id'=>298, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>81, 'category_id'=>4],
                ['id'=>299, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>81, 'category_id'=>12],
            
                ['id'=>300, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>82, 'category_id'=>2],
                ['id'=>301, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>82, 'category_id'=>4],
                ['id'=>302, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>82, 'category_id'=>12],
            
                ['id'=>303, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>83, 'category_id'=>2],
                ['id'=>304, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>83, 'category_id'=>4],
                ['id'=>305, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>83, 'category_id'=>12],
            
                ['id'=>306, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>84, 'category_id'=>2],
                ['id'=>307, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>84, 'category_id'=>4],
                ['id'=>308, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>84, 'category_id'=>12],
            
                ['id'=>309, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>85, 'category_id'=>2],
                ['id'=>310, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>85, 'category_id'=>4],
                ['id'=>311, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>85, 'category_id'=>12],
            
                ['id'=>312, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>86, 'category_id'=>2],
                ['id'=>313, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>86, 'category_id'=>4],
                ['id'=>314, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>86, 'category_id'=>12],
            
                ['id'=>315, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>87, 'category_id'=>2],
                ['id'=>316, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>87, 'category_id'=>4],
                ['id'=>317, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>87, 'category_id'=>13],
            
                ['id'=>318, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>88, 'category_id'=>2],
                ['id'=>319, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>88, 'category_id'=>4],
                ['id'=>320, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>88, 'category_id'=>13],
            
                ['id'=>321, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>89, 'category_id'=>2],
                ['id'=>322, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>89, 'category_id'=>4],
                ['id'=>323, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>89, 'category_id'=>13],
            
                ['id'=>324, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>90, 'category_id'=>2],
                ['id'=>325, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>90, 'category_id'=>4],
                ['id'=>326, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>90, 'category_id'=>13],
            
                ['id'=>327, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>91, 'category_id'=>2],
                ['id'=>328, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>91, 'category_id'=>4],
                ['id'=>329, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>91, 'category_id'=>13],
            
                ['id'=>330, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>92, 'category_id'=>2],
                ['id'=>331, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>92, 'category_id'=>4],
                ['id'=>332, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>92, 'category_id'=>13],
            
                ['id'=>333, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>93, 'category_id'=>2],
                ['id'=>334, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>93, 'category_id'=>4],
                ['id'=>335, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>93, 'category_id'=>13],
            
                ['id'=>336, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>94, 'category_id'=>2],
                ['id'=>337, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>94, 'category_id'=>4],
                ['id'=>338, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>94, 'category_id'=>13],
            
                ['id'=>339, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>95, 'category_id'=>2],
                ['id'=>340, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>95, 'category_id'=>4],
                ['id'=>341, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>95, 'category_id'=>13],
            
                ['id'=>342, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>96, 'category_id'=>2],
                ['id'=>343, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>96, 'category_id'=>4],
                ['id'=>344, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>96, 'category_id'=>13],
            
                ['id'=>345, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>97, 'category_id'=>2],
                ['id'=>346, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>97, 'category_id'=>4],
                ['id'=>347, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>97, 'category_id'=>13],
            
                ['id'=>348, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>98, 'category_id'=>2],
                ['id'=>349, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>98, 'category_id'=>4],
                ['id'=>350, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>98, 'category_id'=>13],
            
                ['id'=>351, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>99, 'category_id'=>2],
                ['id'=>352, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>99, 'category_id'=>4],
                ['id'=>353, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>99, 'category_id'=>13],
            
                ['id'=>354, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>100, 'category_id'=>2],
                ['id'=>355, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>100, 'category_id'=>4],
                ['id'=>356, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>100, 'category_id'=>13],
            
                ['id'=>357, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>101, 'category_id'=>2],
                ['id'=>358, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>101, 'category_id'=>4],
                ['id'=>359, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>101, 'category_id'=>13],
            
                ['id'=>360, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>102, 'category_id'=>2],
                ['id'=>361, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>102, 'category_id'=>4],
                ['id'=>362, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>102, 'category_id'=>13],
            
                ['id'=>363, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>103, 'category_id'=>2],
                ['id'=>364, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>103, 'category_id'=>5],
                ['id'=>365, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>103, 'category_id'=>15],
            
                ['id'=>366, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>104, 'category_id'=>2],
                ['id'=>367, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>104, 'category_id'=>5],
                ['id'=>368, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>104, 'category_id'=>15],
            
                ['id'=>369, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>105, 'category_id'=>2],
                ['id'=>370, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>105, 'category_id'=>5],
                ['id'=>371, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>105, 'category_id'=>15],
            
                ['id'=>372, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>106, 'category_id'=>2],
                ['id'=>373, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>106, 'category_id'=>5],
                ['id'=>374, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>106, 'category_id'=>15],
            
                ['id'=>375, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>107, 'category_id'=>2],
                ['id'=>376, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>107, 'category_id'=>5],
                ['id'=>377, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>107, 'category_id'=>15],
            
                ['id'=>378, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>108, 'category_id'=>2],
                ['id'=>379, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>108, 'category_id'=>5],
                ['id'=>380, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>108, 'category_id'=>15],
            
                ['id'=>381, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>109, 'category_id'=>2],
                ['id'=>382, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>109, 'category_id'=>5],
                ['id'=>383, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>109, 'category_id'=>15],
            
                ['id'=>384, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>110, 'category_id'=>2],
                ['id'=>385, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>110, 'category_id'=>5],
                ['id'=>386, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>110, 'category_id'=>15],
            
                ['id'=>387, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>111, 'category_id'=>2],
                ['id'=>388, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>111, 'category_id'=>5],
                ['id'=>389, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>111, 'category_id'=>15],
            
                ['id'=>390, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>112, 'category_id'=>2],
                ['id'=>391, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>112, 'category_id'=>5],
                ['id'=>392, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>112, 'category_id'=>15],
            
                ['id'=>393, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>113, 'category_id'=>2],
                ['id'=>394, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>113, 'category_id'=>5],
                ['id'=>395, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>113, 'category_id'=>15],
            
                ['id'=>396, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>114, 'category_id'=>2],
                ['id'=>397, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>114, 'category_id'=>5],
                ['id'=>398, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>114, 'category_id'=>15],
            
                ['id'=>399, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>115, 'category_id'=>2],
                ['id'=>400, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>115, 'category_id'=>5],
                ['id'=>401, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>115, 'category_id'=>15],
            
                ['id'=>402, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>116, 'category_id'=>2],
                ['id'=>403, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>116, 'category_id'=>5],
                ['id'=>404, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>116, 'category_id'=>15],
            
                ['id'=>405, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>117, 'category_id'=>2],
                ['id'=>406, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>117, 'category_id'=>5],
                ['id'=>407, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>117, 'category_id'=>15],
            
                ['id'=>408, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>118, 'category_id'=>2],
                ['id'=>409, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>118, 'category_id'=>5],
                ['id'=>410, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>118, 'category_id'=>14],
            
                ['id'=>411, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>119, 'category_id'=>2],
                ['id'=>412, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>119, 'category_id'=>5],
                ['id'=>413, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>119, 'category_id'=>14],
            
                ['id'=>414, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>120, 'category_id'=>2],
                ['id'=>415, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>120, 'category_id'=>5],
                ['id'=>416, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>120, 'category_id'=>14],
            
                ['id'=>417, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>121, 'category_id'=>2],
                ['id'=>418, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>121, 'category_id'=>5],
                ['id'=>419, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>121, 'category_id'=>14],
            
                ['id'=>420, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>122, 'category_id'=>2],
                ['id'=>421, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>122, 'category_id'=>5],
                ['id'=>422, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>122, 'category_id'=>14],
            
                ['id'=>423, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>123, 'category_id'=>2],
                ['id'=>424, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>123, 'category_id'=>5],
                ['id'=>425, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>123, 'category_id'=>14],
            
                ['id'=>426, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>124, 'category_id'=>2],
                ['id'=>427, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>124, 'category_id'=>5],
                ['id'=>428, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>124, 'category_id'=>14],
            
                ['id'=>429, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>125, 'category_id'=>2],
                ['id'=>430, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>125, 'category_id'=>5],
                ['id'=>431, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>125, 'category_id'=>14],
            
                ['id'=>432, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>126, 'category_id'=>2],
                ['id'=>433, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>126, 'category_id'=>5],
                ['id'=>434, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>126, 'category_id'=>14],
            
                ['id'=>435, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>127, 'category_id'=>2],
                ['id'=>436, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>127, 'category_id'=>5],
                ['id'=>437, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>127, 'category_id'=>14],
            
                ['id'=>438, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>128, 'category_id'=>2],
                ['id'=>439, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>128, 'category_id'=>5],
                ['id'=>440, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>128, 'category_id'=>14],
            
                ['id'=>441, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>129, 'category_id'=>2],
                ['id'=>442, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>129, 'category_id'=>5],
                ['id'=>443, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>129, 'category_id'=>14],
            
                ['id'=>444, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>130, 'category_id'=>2],
                ['id'=>445, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>130, 'category_id'=>5],
                ['id'=>446, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>130, 'category_id'=>14],
            
                ['id'=>447, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>131, 'category_id'=>2],
                ['id'=>448, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>131, 'category_id'=>5],
                ['id'=>449, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>131, 'category_id'=>14],
            
                ['id'=>450, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>132, 'category_id'=>2],
                ['id'=>451, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>132, 'category_id'=>5],
                ['id'=>452, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>132, 'category_id'=>14],
            
                ['id'=>453, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>133, 'category_id'=>1],
                ['id'=>454, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>133, 'category_id'=>2],
                ['id'=>455, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>133, 'category_id'=>6],
                ['id'=>456, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>133, 'category_id'=>16],
            
                ['id'=>457, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>134, 'category_id'=>1],
                ['id'=>458, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>134, 'category_id'=>2],
                ['id'=>459, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>134, 'category_id'=>6],
                ['id'=>460, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>134, 'category_id'=>16],
            
                ['id'=>461, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>135, 'category_id'=>1],
                ['id'=>462, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>135, 'category_id'=>2],
                ['id'=>463, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>135, 'category_id'=>6],
                ['id'=>464, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>135, 'category_id'=>16],
            
                ['id'=>465, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>136, 'category_id'=>1],
                ['id'=>466, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>136, 'category_id'=>2],
                ['id'=>467, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>136, 'category_id'=>6],
                ['id'=>468, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>136, 'category_id'=>16],
            
                ['id'=>469, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>137, 'category_id'=>1],
                ['id'=>470, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>137, 'category_id'=>2],
                ['id'=>471, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>137, 'category_id'=>6],
                ['id'=>472, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>137, 'category_id'=>16],
            
                ['id'=>473, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>138, 'category_id'=>1],
                ['id'=>474, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>138, 'category_id'=>2],
                ['id'=>475, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>138, 'category_id'=>6],
                ['id'=>476, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>138, 'category_id'=>16],
            
                ['id'=>477, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>139, 'category_id'=>1],
                ['id'=>478, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>139, 'category_id'=>2],
                ['id'=>479, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>139, 'category_id'=>6],
                ['id'=>480, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>139, 'category_id'=>16],
            
                ['id'=>481, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>140, 'category_id'=>1],
                ['id'=>482, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>140, 'category_id'=>2],
                ['id'=>483, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>140, 'category_id'=>6],
                ['id'=>484, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>140, 'category_id'=>16],
            
                ['id'=>485, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>141, 'category_id'=>1],
                ['id'=>486, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>141, 'category_id'=>2],
                ['id'=>487, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>141, 'category_id'=>6],
                ['id'=>488, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>141, 'category_id'=>16],
            
                ['id'=>489, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>142, 'category_id'=>1],
                ['id'=>490, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>142, 'category_id'=>2],
                ['id'=>491, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>142, 'category_id'=>6],
                ['id'=>492, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>142, 'category_id'=>16],
            
                ['id'=>493, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>143, 'category_id'=>1],
                ['id'=>494, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>143, 'category_id'=>2],
                ['id'=>495, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>143, 'category_id'=>6],
                ['id'=>496, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>143, 'category_id'=>16],
            
                ['id'=>497, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>144, 'category_id'=>1],
                ['id'=>498, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>144, 'category_id'=>2],
                ['id'=>499, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>144, 'category_id'=>6],
                ['id'=>500, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>144, 'category_id'=>16],
            
                ['id'=>501, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>145, 'category_id'=>1],
                ['id'=>502, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>145, 'category_id'=>2],
                ['id'=>503, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>145, 'category_id'=>6],
                ['id'=>504, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>145, 'category_id'=>16],
            
                ['id'=>505, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>146, 'category_id'=>1],
                ['id'=>506, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>146, 'category_id'=>2],
                ['id'=>507, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>146, 'category_id'=>6],
                ['id'=>508, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>146, 'category_id'=>16],
            
                ['id'=>509, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>147, 'category_id'=>1],
                ['id'=>510, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>147, 'category_id'=>2],
                ['id'=>511, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>147, 'category_id'=>6],
                ['id'=>512, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>147, 'category_id'=>16],
            
                ['id'=>513, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>148, 'category_id'=>1],
                ['id'=>514, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>148, 'category_id'=>2],
                ['id'=>515, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>148, 'category_id'=>6],
                ['id'=>516, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>148, 'category_id'=>16],
            
                ['id'=>517, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>149, 'category_id'=>1],
                ['id'=>518, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>149, 'category_id'=>2],
                ['id'=>519, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>149, 'category_id'=>6],
                ['id'=>520, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>149, 'category_id'=>16],
            
                ['id'=>521, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>150, 'category_id'=>1],
                ['id'=>522, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>150, 'category_id'=>2],
                ['id'=>523, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>150, 'category_id'=>6],
                ['id'=>524, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>150, 'category_id'=>16],
            
                ['id'=>525, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>151, 'category_id'=>1],
                ['id'=>526, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>151, 'category_id'=>2],
                ['id'=>527, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>151, 'category_id'=>6],
                ['id'=>528, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>151, 'category_id'=>16],
            
                ['id'=>529, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>152, 'category_id'=>1],
                ['id'=>530, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>152, 'category_id'=>2],
                ['id'=>531, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>152, 'category_id'=>6],
                ['id'=>532, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>152, 'category_id'=>16],
            
                ['id'=>533, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>153, 'category_id'=>1],
                ['id'=>534, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>153, 'category_id'=>2],
                ['id'=>535, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>153, 'category_id'=>6],
                ['id'=>536, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>153, 'category_id'=>17],
            
                ['id'=>537, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>154, 'category_id'=>1],
                ['id'=>538, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>154, 'category_id'=>2],
                ['id'=>539, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>154, 'category_id'=>6],
                ['id'=>540, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>154, 'category_id'=>17],
            
                ['id'=>541, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>155, 'category_id'=>1],
                ['id'=>542, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>155, 'category_id'=>2],
                ['id'=>543, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>155, 'category_id'=>6],
                ['id'=>544, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>155, 'category_id'=>17],
            
                ['id'=>545, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>156, 'category_id'=>1],
                ['id'=>546, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>156, 'category_id'=>2],
                ['id'=>547, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>156, 'category_id'=>6],
                ['id'=>548, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>156, 'category_id'=>17],
            
                ['id'=>549, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>157, 'category_id'=>1],
                ['id'=>550, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>157, 'category_id'=>2],
                ['id'=>551, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>157, 'category_id'=>6],
                ['id'=>552, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>157, 'category_id'=>17],
            
                ['id'=>553, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>158, 'category_id'=>1],
                ['id'=>554, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>158, 'category_id'=>2],
                ['id'=>555, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>158, 'category_id'=>6],
                ['id'=>556, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>158, 'category_id'=>17],
            
                ['id'=>557, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>159, 'category_id'=>1],
                ['id'=>558, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>159, 'category_id'=>2],
                ['id'=>559, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>159, 'category_id'=>6],
                ['id'=>560, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>159, 'category_id'=>17],
            
                ['id'=>561, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>160, 'category_id'=>1],
                ['id'=>562, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>160, 'category_id'=>2],
                ['id'=>563, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>160, 'category_id'=>6],
                ['id'=>564, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>160, 'category_id'=>17],
            
                ['id'=>565, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>161, 'category_id'=>1],
                ['id'=>566, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>161, 'category_id'=>2],
                ['id'=>567, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>161, 'category_id'=>6],
                ['id'=>568, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>161, 'category_id'=>17],
            
                ['id'=>569, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>162, 'category_id'=>1],
                ['id'=>570, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>162, 'category_id'=>2],
                ['id'=>571, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>162, 'category_id'=>6],
                ['id'=>572, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>162, 'category_id'=>17],
            
                ['id'=>573, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>163, 'category_id'=>1],
                ['id'=>574, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>163, 'category_id'=>2],
                ['id'=>575, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>163, 'category_id'=>6],
                ['id'=>576, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>163, 'category_id'=>17],
            
                ['id'=>577, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>164, 'category_id'=>1],
                ['id'=>578, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>164, 'category_id'=>2],
                ['id'=>579, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>164, 'category_id'=>6],
                ['id'=>580, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>164, 'category_id'=>17],
            
                ['id'=>581, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>165, 'category_id'=>1],
                ['id'=>582, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>165, 'category_id'=>7],
                ['id'=>583, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>165, 'category_id'=>18],
            
                ['id'=>584, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>166, 'category_id'=>1],
                ['id'=>585, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>166, 'category_id'=>7],
                ['id'=>586, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>166, 'category_id'=>18],
            
                ['id'=>587, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>167, 'category_id'=>1],
                ['id'=>588, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>167, 'category_id'=>7],
                ['id'=>589, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>167, 'category_id'=>18],
            
                ['id'=>590, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>168, 'category_id'=>1],
                ['id'=>591, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>168, 'category_id'=>7],
                ['id'=>592, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>168, 'category_id'=>18],
            
                ['id'=>593, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>169, 'category_id'=>1],
                ['id'=>594, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>169, 'category_id'=>7],
                ['id'=>595, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>169, 'category_id'=>18],
            
                ['id'=>596, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>170, 'category_id'=>1],
                ['id'=>597, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>170, 'category_id'=>7],
                ['id'=>598, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>170, 'category_id'=>18],
            
                ['id'=>599, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>171, 'category_id'=>1],
                ['id'=>600, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>171, 'category_id'=>7],
                ['id'=>601, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>171, 'category_id'=>18],
            
                ['id'=>602, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>172, 'category_id'=>1],
                ['id'=>603, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>172, 'category_id'=>7],
                ['id'=>604, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>172, 'category_id'=>18],
            
                ['id'=>605, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>173, 'category_id'=>1],
                ['id'=>606, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>173, 'category_id'=>7],
                ['id'=>607, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>173, 'category_id'=>18],
            
                ['id'=>608, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>174, 'category_id'=>1],
                ['id'=>609, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>174, 'category_id'=>7],
                ['id'=>610, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>174, 'category_id'=>18],
            
                ['id'=>611, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>175, 'category_id'=>1],
                ['id'=>612, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>175, 'category_id'=>7],
                ['id'=>613, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>175, 'category_id'=>18],
            
                ['id'=>614, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>176, 'category_id'=>1],
                ['id'=>615, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>176, 'category_id'=>2],
                ['id'=>616, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>176, 'category_id'=>7],
                ['id'=>617, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>176, 'category_id'=>19],
            
                ['id'=>618, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>177, 'category_id'=>1],
                ['id'=>619, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>177, 'category_id'=>2],
                ['id'=>620, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>177, 'category_id'=>7],
                ['id'=>621, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>177, 'category_id'=>19],
            
                ['id'=>622, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>178, 'category_id'=>1],
                ['id'=>623, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>178, 'category_id'=>2],
                ['id'=>624, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>178, 'category_id'=>7],
                ['id'=>625, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>178, 'category_id'=>19],
            
                ['id'=>626, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>179, 'category_id'=>1],
                ['id'=>627, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>179, 'category_id'=>2],
                ['id'=>628, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>179, 'category_id'=>7],
                ['id'=>629, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>179, 'category_id'=>19],
            
                ['id'=>630, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>180, 'category_id'=>1],
                ['id'=>631, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>180, 'category_id'=>2],
                ['id'=>632, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>180, 'category_id'=>7],
                ['id'=>633, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>180, 'category_id'=>19],
            
                ['id'=>634, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>181, 'category_id'=>1],
                ['id'=>635, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>181, 'category_id'=>2],
                ['id'=>636, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>181, 'category_id'=>7],
                ['id'=>637, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>181, 'category_id'=>19],
            
                ['id'=>638, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>182, 'category_id'=>1],
                ['id'=>639, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>182, 'category_id'=>2],
                ['id'=>640, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>182, 'category_id'=>7],
                ['id'=>641, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>182, 'category_id'=>19],
            
                ['id'=>642, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>183, 'category_id'=>1],
                ['id'=>643, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>183, 'category_id'=>2],
                ['id'=>644, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>183, 'category_id'=>7],
                ['id'=>645, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>183, 'category_id'=>19],
            
                ['id'=>646, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>184, 'category_id'=>1],
                ['id'=>647, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>184, 'category_id'=>2],
                ['id'=>648, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>184, 'category_id'=>7],
                ['id'=>649, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>184, 'category_id'=>19],
            
                ['id'=>650, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>185, 'category_id'=>1],
                ['id'=>651, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>185, 'category_id'=>2],
                ['id'=>652, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>185, 'category_id'=>7],
                ['id'=>653, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>185, 'category_id'=>19],
            
                ['id'=>654, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>186, 'category_id'=>1],
                ['id'=>655, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>186, 'category_id'=>2],
                ['id'=>656, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>186, 'category_id'=>7],
                ['id'=>657, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>186, 'category_id'=>19],
            
                ['id'=>658, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>187, 'category_id'=>1],
                ['id'=>659, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>187, 'category_id'=>2],
                ['id'=>660, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>187, 'category_id'=>7],
                ['id'=>661, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>187, 'category_id'=>18],
            
                ['id'=>662, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>188, 'category_id'=>1],
                ['id'=>663, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>188, 'category_id'=>2],
                ['id'=>664, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>188, 'category_id'=>7],
                ['id'=>665, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>188, 'category_id'=>18],
            
                ['id'=>666, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>189, 'category_id'=>1],
                ['id'=>667, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>189, 'category_id'=>2],
                ['id'=>668, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>189, 'category_id'=>7],
                ['id'=>669, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>189, 'category_id'=>18],
            
                ['id'=>670, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>190, 'category_id'=>1],
                ['id'=>671, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>190, 'category_id'=>2],
                ['id'=>672, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>190, 'category_id'=>7],
                ['id'=>673, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>190, 'category_id'=>18],
            
                ['id'=>674, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>191, 'category_id'=>1],
                ['id'=>675, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>191, 'category_id'=>2],
                ['id'=>676, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>191, 'category_id'=>7],
                ['id'=>677, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>191, 'category_id'=>18],
            
                ['id'=>678, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>192, 'category_id'=>1],
                ['id'=>679, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>192, 'category_id'=>2],
                ['id'=>680, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>192, 'category_id'=>7],
                ['id'=>681, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>192, 'category_id'=>18],
            
                ['id'=>682, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>193, 'category_id'=>1],
                ['id'=>683, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>193, 'category_id'=>2],
                ['id'=>684, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>193, 'category_id'=>7],
                ['id'=>685, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>193, 'category_id'=>18],
            
                ['id'=>686, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>194, 'category_id'=>1],
                ['id'=>687, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>194, 'category_id'=>2],
                ['id'=>688, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>194, 'category_id'=>7],
                ['id'=>689, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>194, 'category_id'=>18],
            
                ['id'=>690, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>195, 'category_id'=>1],
                ['id'=>691, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>195, 'category_id'=>2],
                ['id'=>692, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>195, 'category_id'=>7],
                ['id'=>693, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>195, 'category_id'=>18],
            
                ['id'=>694, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>196, 'category_id'=>1],
                ['id'=>695, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>196, 'category_id'=>4],
                ['id'=>696, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>196, 'category_id'=>11],
            
                ['id'=>697, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>197, 'category_id'=>1],
                ['id'=>698, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>197, 'category_id'=>4],
                ['id'=>699, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>197, 'category_id'=>11],
            
                ['id'=>700, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>198, 'category_id'=>1],
                ['id'=>701, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>198, 'category_id'=>4],
                ['id'=>702, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>198, 'category_id'=>11],
            
                ['id'=>703, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>199, 'category_id'=>1],
                ['id'=>704, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>199, 'category_id'=>4],
                ['id'=>705, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>199, 'category_id'=>11],
            
                ['id'=>706, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>200, 'category_id'=>1],
                ['id'=>707, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>200, 'category_id'=>4],
                ['id'=>708, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>200, 'category_id'=>11],
            
                ['id'=>709, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>201, 'category_id'=>1],
                ['id'=>710, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>201, 'category_id'=>4],
                ['id'=>711, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>201, 'category_id'=>11],
            
                ['id'=>712, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>202, 'category_id'=>1],
                ['id'=>713, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>202, 'category_id'=>4],
                ['id'=>714, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>202, 'category_id'=>11],
            
                ['id'=>715, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>203, 'category_id'=>1],
                ['id'=>716, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>203, 'category_id'=>4],
                ['id'=>717, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>203, 'category_id'=>11],
            
                ['id'=>718, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>204, 'category_id'=>1],
                ['id'=>719, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>204, 'category_id'=>4],
                ['id'=>720, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>204, 'category_id'=>11],
            
                ['id'=>721, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>205, 'category_id'=>1],
                ['id'=>722, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>205, 'category_id'=>4],
                ['id'=>723, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>205, 'category_id'=>11],
            
                ['id'=>724, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>206, 'category_id'=>1],
                ['id'=>725, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>206, 'category_id'=>4],
                ['id'=>726, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>206, 'category_id'=>11],
            
                ['id'=>727, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>207, 'category_id'=>1],
                ['id'=>728, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>207, 'category_id'=>4],
                ['id'=>729, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>207, 'category_id'=>11],
            
                ['id'=>730, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>208, 'category_id'=>1],
                ['id'=>731, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>208, 'category_id'=>4],
                ['id'=>732, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>208, 'category_id'=>11],
            
                ['id'=>733, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>209, 'category_id'=>1],
                ['id'=>734, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>209, 'category_id'=>4],
                ['id'=>735, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>209, 'category_id'=>11],
            
                ['id'=>736, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>211, 'category_id'=>1],
                ['id'=>737, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>211, 'category_id'=>4],
                ['id'=>738, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>211, 'category_id'=>12],
            
                ['id'=>739, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>212, 'category_id'=>1],
                ['id'=>740, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>212, 'category_id'=>4],
                ['id'=>741, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>212, 'category_id'=>12],
            
                ['id'=>742, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>213, 'category_id'=>1],
                ['id'=>743, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>213, 'category_id'=>4],
                ['id'=>744, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>213, 'category_id'=>12],
            
                ['id'=>745, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>214, 'category_id'=>1],
                ['id'=>746, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>214, 'category_id'=>4],
                ['id'=>747, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>214, 'category_id'=>12],
            
                ['id'=>748, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>215, 'category_id'=>1],
                ['id'=>749, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>215, 'category_id'=>4],
                ['id'=>750, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>215, 'category_id'=>12],
            
                ['id'=>751, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>216, 'category_id'=>1],
                ['id'=>752, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>216, 'category_id'=>4],
                ['id'=>753, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>216, 'category_id'=>12],
            
                ['id'=>754, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>217, 'category_id'=>1],
                ['id'=>755, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>217, 'category_id'=>4],
                ['id'=>756, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>217, 'category_id'=>12],
            
                ['id'=>757, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>218, 'category_id'=>1],
                ['id'=>758, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>218, 'category_id'=>4],
                ['id'=>759, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>218, 'category_id'=>12],
            
                ['id'=>760, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>219, 'category_id'=>1],
                ['id'=>761, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>219, 'category_id'=>4],
                ['id'=>762, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>219, 'category_id'=>12],
            
                ['id'=>763, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>220, 'category_id'=>1],
                ['id'=>764, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>220, 'category_id'=>4],
                ['id'=>765, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>220, 'category_id'=>12],
            
                ['id'=>766, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>221, 'category_id'=>1],
                ['id'=>767, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>221, 'category_id'=>4],
                ['id'=>768, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>221, 'category_id'=>12],
            
                ['id'=>769, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>222, 'category_id'=>1],
                ['id'=>770, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>222, 'category_id'=>4],
                ['id'=>771, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>222, 'category_id'=>12],
            
                ['id'=>772, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>223, 'category_id'=>1],
                ['id'=>773, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>223, 'category_id'=>4],
                ['id'=>774, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>223, 'category_id'=>11],
                ['id'=>775, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>223, 'category_id'=>13],
            
                ['id'=>776, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>224, 'category_id'=>1],
                ['id'=>777, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>224, 'category_id'=>4],
                ['id'=>778, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>224, 'category_id'=>11],
                ['id'=>779, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>224, 'category_id'=>13],
            
                ['id'=>780, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>225, 'category_id'=>1],
                ['id'=>781, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>225, 'category_id'=>4],
                ['id'=>782, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>225, 'category_id'=>11],
                ['id'=>783, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>225, 'category_id'=>13],
            
                ['id'=>784, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>226, 'category_id'=>1],
                ['id'=>785, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>226, 'category_id'=>4],
                ['id'=>786, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>226, 'category_id'=>11],
                ['id'=>787, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>226, 'category_id'=>13],
            
                ['id'=>788, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>227, 'category_id'=>1],
                ['id'=>789, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>227, 'category_id'=>4],
                ['id'=>790, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>227, 'category_id'=>11],
                ['id'=>791, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>227, 'category_id'=>13],
            
                ['id'=>792, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>228, 'category_id'=>1],
                ['id'=>793, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>228, 'category_id'=>4],
                ['id'=>794, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>228, 'category_id'=>11],
                ['id'=>795, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>228, 'category_id'=>13],
            
                ['id'=>796, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>229, 'category_id'=>1],
                ['id'=>797, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>229, 'category_id'=>4],
                ['id'=>798, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>229, 'category_id'=>11],
                ['id'=>799, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>229, 'category_id'=>13],
            
                ['id'=>800, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>230, 'category_id'=>1],
                ['id'=>801, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>230, 'category_id'=>4],
                ['id'=>802, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>230, 'category_id'=>11],
                ['id'=>803, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>230, 'category_id'=>13],
            
                ['id'=>804, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>231, 'category_id'=>1],
                ['id'=>805, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>231, 'category_id'=>4],
                ['id'=>806, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>231, 'category_id'=>11],
                ['id'=>807, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>231, 'category_id'=>13],
            
                ['id'=>808, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>232, 'category_id'=>1],
                ['id'=>809, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>232, 'category_id'=>4],
                ['id'=>810, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>232, 'category_id'=>11],
                ['id'=>811, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>232, 'category_id'=>13],
            
                ['id'=>812, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>233, 'category_id'=>1],
                ['id'=>813, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>233, 'category_id'=>4],
                ['id'=>814, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>233, 'category_id'=>11],
                ['id'=>815, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>233, 'category_id'=>13],
            
                ['id'=>816, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>234, 'category_id'=>1],
                ['id'=>817, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>234, 'category_id'=>4],
                ['id'=>818, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>234, 'category_id'=>11],
                ['id'=>819, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>234, 'category_id'=>13],
            
                ['id'=>820, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>235, 'category_id'=>1],
                ['id'=>821, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>235, 'category_id'=>5],
                ['id'=>822, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>235, 'category_id'=>14],
            
                ['id'=>823, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>236, 'category_id'=>1],
                ['id'=>824, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>236, 'category_id'=>5],
                ['id'=>825, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>236, 'category_id'=>14],
            
                ['id'=>826, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>237, 'category_id'=>1],
                ['id'=>827, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>237, 'category_id'=>5],
                ['id'=>828, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>237, 'category_id'=>14],
            
                ['id'=>829, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>238, 'category_id'=>1],
                ['id'=>830, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>238, 'category_id'=>5],
                ['id'=>831, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>238, 'category_id'=>14],
            
                ['id'=>832, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>239, 'category_id'=>1],
                ['id'=>833, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>239, 'category_id'=>5],
                ['id'=>834, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>239, 'category_id'=>14],
            
                ['id'=>835, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>240, 'category_id'=>1],
                ['id'=>836, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>240, 'category_id'=>5],
                ['id'=>837, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>240, 'category_id'=>14],
            
                ['id'=>838, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>241, 'category_id'=>1],
                ['id'=>839, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>241, 'category_id'=>5],
                ['id'=>840, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>241, 'category_id'=>14],
            
                ['id'=>841, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>242, 'category_id'=>1],
                ['id'=>842, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>242, 'category_id'=>5],
                ['id'=>843, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>242, 'category_id'=>14],
            
                ['id'=>844, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>243, 'category_id'=>1],
                ['id'=>845, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>243, 'category_id'=>5],
                ['id'=>846, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>243, 'category_id'=>14],
            
                ['id'=>847, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>244, 'category_id'=>1],
                ['id'=>848, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>244, 'category_id'=>5],
                ['id'=>849, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>244, 'category_id'=>14],
            
                ['id'=>850, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>245, 'category_id'=>1],
                ['id'=>851, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>245, 'category_id'=>5],
                ['id'=>852, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>245, 'category_id'=>15],
            
                ['id'=>853, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>246, 'category_id'=>1],
                ['id'=>854, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>246, 'category_id'=>5],
                ['id'=>855, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>246, 'category_id'=>15],
            
                ['id'=>856, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>247, 'category_id'=>1],
                ['id'=>857, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>247, 'category_id'=>5],
                ['id'=>858, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>247, 'category_id'=>15],
            
                ['id'=>859, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>248, 'category_id'=>1],
                ['id'=>860, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>248, 'category_id'=>5],
                ['id'=>861, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>248, 'category_id'=>15],
            
                ['id'=>862, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>249, 'category_id'=>1],
                ['id'=>863, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>249, 'category_id'=>5],
                ['id'=>864, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>249, 'category_id'=>15],
            
                ['id'=>865, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>250, 'category_id'=>1],
                ['id'=>866, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>250, 'category_id'=>5],
                ['id'=>867, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>250, 'category_id'=>15],
            
                ['id'=>868, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>251, 'category_id'=>1],
                ['id'=>869, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>251, 'category_id'=>5],
                ['id'=>870, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>251, 'category_id'=>15],
            
                ['id'=>871, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>252, 'category_id'=>1],
                ['id'=>872, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>252, 'category_id'=>5],
                ['id'=>873, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>252, 'category_id'=>15],
            
                ['id'=>874, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>253, 'category_id'=>1],
                ['id'=>875, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>253, 'category_id'=>5],
                ['id'=>876, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>253, 'category_id'=>15],
            
                ['id'=>877, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>254, 'category_id'=>1],
                ['id'=>878, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>254, 'category_id'=>5],
                ['id'=>879, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>254, 'category_id'=>15],
            
                ['id'=>880, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>255, 'category_id'=>1],
                ['id'=>881, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>255, 'category_id'=>5],
                ['id'=>882, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>255, 'category_id'=>15],
            
                ['id'=>883, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>256, 'category_id'=>1],
                ['id'=>884, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>256, 'category_id'=>5],
                ['id'=>885, 'created_at'=>now(), 'updated_at'=>now(), 'product_id'=>256, 'category_id'=>15],
            
                            
    
          
        ]);
    }
}
