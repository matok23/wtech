<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class BrowsingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $category)
    {   
        $products=Category::where('slug', $category)->firstOrFail()->products();
        $manufacturers=$products
        ->with('manufacturer')->get()->pluck('manufacturer.name')->unique()->sort()->values()->all();
        $colors=$products->pluck('color')->unique()->sort()->values()->all();
        $sizes=$products->with('stock')->get()->pluck('stock')->flatten()->pluck('size')->unique()->sort()->values()->all();
        $priceMax=ceil($products->max('price'));
        $priceMin=ceil($products->min('price'));
        
        return view('browsing.category-view',compact('category','manufacturers','colors','sizes','priceMax','priceMin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
