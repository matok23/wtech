<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class ProductFilters extends Component
{
    public function mount($category)
    {
        $this->category=$category;
    }

    public function render()
    {   
        $category=Category::with('products')->where('slug',$this->category)->firstOrFail();
        $products=$category->products;
        return view('livewire.product-filters',compact('products'));
    }
}
