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
        $subcategory=request()->query('subcategory');
        $term=request()->query('term');

        // $products=Category::where('slug', $category)->firstOrFail()->products();
        $productsQuery=Product::query()
        ->whereHas('categories', function ($query) use ($category){
            $query->where('slug',$category);
        })
        ->when($subcategory, function ($query) use ($subcategory){
            $query->whereHas('categories',function($q) use ($subcategory) {$q->where('slug',$subcategory);});
        })
        ->when($term, function($query) use ($term){
            $query->where(function ($q) use ($term){
                $q->where('name','ilike','%'.$term.'%')
                ->orWhereHas('manufacturer',function($qq) use ($term) {$qq->where('name','ilike','%'.$term.'%');});
            });
        });
        
        $manufacturers=$productsQuery
        ->with('manufacturer')->get()->pluck('manufacturer.name')->unique()->sort()->values()->all();
        
        $colors=$productsQuery->pluck('color')->unique()->sort()->values()->all();
        
        $sizes=$productsQuery->with('stock')->get()->pluck('stock')->flatten()->pluck('size')->unique()->sort()->values()->all();
        
        $priceMax=ceil($productsQuery->max('price'));
        $priceMin=ceil($productsQuery->min('price'));

        $catName= isset($subcategory) ? Category::where('slug',$subcategory)->firstOrFail()->name : null;
        
        return view('browsing.category-view',compact('category','manufacturers','colors','sizes','priceMax','priceMin','subcategory','term','catName'));
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
