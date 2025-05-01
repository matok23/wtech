<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\SizeStock;
use App\Models\Category;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products=Product::all();
        $products=Product::with(['manufacturer','stock','categories'])->get();
        $sizestock=SizeStock::with('product')->get();
        $categories=Category::with('products')->get();
        return view('products.index',compact('products','sizestock','categories')); //->with(['sizestock'=>$sizestock->load('product')]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data=$request->validated();
        $product=Product::create(Arr::only($data,['name','price','description','image','manufacturer_id','color']));
        $product->categories()->attach($data['categories']);
        return redirect()->route('admin.dash')->with('success','Item created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {   
        $products=Product::all();
        return view('products.product-view',['productSingle'=>$product->load('stock'),'products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
