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
        $products=Product::simplePaginate(10);
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
