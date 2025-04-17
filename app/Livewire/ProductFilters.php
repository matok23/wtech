<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class ProductFilters extends Component
{   
    public $brand = [];

    public $test = '';

    public function mount($category)
    {
        $this->category=$category;
    }

    public function render()
    {   
        \Log::info('Livewire render called', ['brand' => $this->brand]);
        $category=Category::with('products')->where('slug',$this->category)->firstOrFail();
        $products=$category->products()
            ->when($this->brand, function ($query) {
                $query->whereHas('manufacturer',function ($q){$q->whereIn('name',$this->brand);});
            })->get();

            // ->when($this->priceMin, fn ($query) => $query->where('price','>=',$this->priceMin))
            // ->when($this->priceMax, fn ($query) => $query->where('price','<=',$this->priceMax))
            // ->when($this->color, fn ($query) => $query->where('color',$this->color))
            // ->when($this->brand, function ($query) {
            //     $query->whereHas('manufacturer',function ($q){$q->where('name',$this->brand);});
            // })
            // ->when($this->size, function ($query) {
            //     $query->whereHas('stock',function ($q){$q->where('size',$this->size);});
            // })
            // ->get();
        return view('livewire.product-filters',compact('products'));
    }
}
