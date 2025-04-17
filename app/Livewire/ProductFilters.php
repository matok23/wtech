<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class ProductFilters extends Component
{   
    public $brand=[];
    public $size=[];
    public $color=[];
    public $price;
    
    public $category;
    public $manufacturers;
    public $colors;
    public $sizes;
    public $priceMin;
    public $priceMax;

    public function mount($category,$manufacturers,$colors,$sizes,$priceMin,$priceMax)
    {
        $this->category=$category;
        $this->manufacturers=$manufacturers;
        $this->colors=$colors;
        $this->sizes=$sizes;
        $this->priceMax=$priceMax;
        $this->priceMin=$priceMin;

        $this->price=$priceMax;
    }

    public function render()
    {   
        $categoryProds=Category::with('products')->where('slug',$this->category)->firstOrFail();
        $products=$categoryProds->products()
            ->when($this->price, fn ($query) => $query->where('price','<=',$this->price))
            ->when($this->color, fn ($query) => $query->whereIn('color',$this->color))
            ->when($this->size, function ($query) {
                $query->whereHas('stock',function ($q){$q->whereIn('size',$this->size);});
            })
            ->when($this->brand, function ($query) {
                $query->whereHas('manufacturer',function ($q){$q->whereIn('name',$this->brand);});
            })
            ->get();


        return view('livewire.product-filters',
            ['products'=>$products, 'manufacturers'=>$this->manufacturers, 'colors'=>$this->colors, 'sizes'=>$this->sizes, 'priceMin'=>$this->priceMin, 'priceMax'=>$this->priceMax]);
    }
}
