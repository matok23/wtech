<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Manufacturer;
use App\Models\Category;

class AdminController extends Controller
{
    public function index() {
        $term=request()->query('term');
        $products=Product::when($term, function($query) use ($term){
            $query->where(function ($q) use ($term){
                $q->where('name','ilike','%'.$term.'%')
                ->orWhereHas('manufacturer',function($qq) use ($term) {$qq->where('name','ilike','%'.$term.'%');})
                ->orWhereHas('categories',function($qq) use ($term) {$qq->where('name','ilike','%'.$term.'%');});
            });
        })->simplePaginate(10)->appends(request()->query());
        $manufacturers=Manufacturer::all();
        $categories=Category::all();
        return view('admin.dashboard',compact('products','manufacturers','categories'));
    }

    public function edit(Product $product) {
        $product->load('categories')->load('stock')->load('images');
        $manufacturers=Manufacturer::all();
        $categories=Category::all();
        return view('admin.edit-product',compact('product','manufacturers','categories'));
    }
}
