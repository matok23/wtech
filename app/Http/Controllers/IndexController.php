<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;

class IndexController extends Controller
{

    public function index()
    {
        //
    }

 
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

 
    public function show(string $category)
    {
        $categoryProds = Category::with('products')->where('slug', $category)->firstOrFail();
        $products = $categoryProds->products()->with('images')->simplePaginate(16);
        return view('index.category-view', compact('products', 'category'));
    }
    

 
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

 
    public function destroy(string $id)
    {
        //
    }
}
