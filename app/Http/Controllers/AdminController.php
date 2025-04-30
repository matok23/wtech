<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index() {
        $products=Product::simplePaginate(10);
        return view('admin.dashboard',compact('products'));
    }

    public function edit(Product $product) {
        $product->load('categories');
        return view('admin.edit-product',compact('product'));
    }
}
