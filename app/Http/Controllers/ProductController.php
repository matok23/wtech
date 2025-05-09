<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\DeleteProductRequest;
use App\Http\Requests\UpdateStockRequest;
use App\Http\Requests\DeleteStockRequest;
use App\Http\Requests\UpdateImagesRequest;
use App\Http\Requests\DeleteImageRequest;
use App\Models\SizeStock;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
  
    public function index()
    {
        $products=Product::with(['manufacturer','stock','categories'])->get();
        $sizestock=SizeStock::with('product')->get();
        $categories=Category::with('products')->get();
        return view('products.index',compact('products','sizestock','categories')); 
    }

    public function create()
    {
        //
    }

  
    public function store(StoreProductRequest $request)
    {
        $data=$request->validated();
        $product=Product::create(Arr::only($data,['name','price','description','manufacturer_id','color']));
        $product->categories()->attach($data['categories']);
        foreach($request->file('images') as $image){
            $path=$image->storeAs('product_images', uniqid() . '.' . $image->getClientOriginalExtension(), 'public');
            $product->images()->create([
                'url' => $path,
            ]);
        }
        return redirect()->route('admin.dash')->with('success','Item created successfully!');
    }

 
    public function show(Product $product)
    {   
        $subcategory=$product->categories()->where('type','subcategory')->first();
        $gender=$product->categories()->where('type','gender')->first();
        $products=Product::with('images')
        ->when($gender,function($query) use ($gender){
            $query->whereHas('categories',function($q) use ($gender){$q->where('slug',$gender->slug);});
        })
        ->when($subcategory,function($query) use ($subcategory){
            $query->whereHas('categories',function($q) use ($subcategory){$q->where('slug',$subcategory->slug);});
        })
        ->limit(10)->get();
        return view('products.product-view',['productSingle'=>$product->load('stock')->load('images'),'products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update(array_filter(Arr::only($data, ['name', 'price', 'description', 'image', 'manufacturer_id', 'color']), fn($value) => $value !== '' && $value!==null));
        $product->categories()->sync($data['categories']);
        return redirect()->route('admin.edit',$product->id)->with('success','Item updated successfully!');
    }

    public function updateStock(UpdateStockRequest $request, Product $product)
    {   
        $data = $request->validated();
        $sizes = $data['sizes'] ?? [];
        $stocks = $data['stocks'] ?? [];
        $stock = array_map(fn($si,$st) => ['size' => $si, 'stock' => $st], $sizes,$stocks);

        foreach($stock as $st){
            SizeStock::updateOrCreate(
                ['product_id' => $product->id, 'size' => $st['size']],
                ['stock_left' => $st['stock']]
            );
        }

        return redirect()->route('admin.edit',$product->id)->with('success','Stock updated successfully!');
    }

    public function updateImages(UpdateImagesRequest $request, Product $product)
    {
        $data = $request->validated();
        foreach($request->file('images') as $image){
            $path=$image->storeAs('product_images', uniqid() . '.' . $image->getClientOriginalExtension(), 'public');
            $product->images()->create([
                'url' => $path,
            ]);
        }
        return redirect()->route('admin.edit',$product->id)->with('success','Images uploaded successfully!');
    }


    public function destroy(DeleteProductRequest $request, Product $product)
    {   
        foreach($product->images as $image){
            if(Storage::disk('public')->exists($image->url)){
                Storage::disk('public')->delete($image->url);
            }
        }
        $product->delete();
        return redirect()->route('admin.dash')->with('success','Item deleted successfully!');
    }

    public function destroyStock(DeleteStockRequest $request, SizeStock $stock)
    {   
        $product_id=$stock->product_id;
        $stock->delete();
        return redirect()->route('admin.edit',$product_id)->with('success','Stock deleted successfully!');
    }

    public function destroyImage(DeleteImageRequest $request, Image $image) 
    {   
        $product_id=$image->product_id;
        if(Storage::disk('public')->exists($image->url)){
            Storage::disk('public')->delete($image->url);
        }
        $image->delete();
        return redirect()->route('admin.edit',$product_id)->with('success','Image deleted successfully!');
    }



    
}
