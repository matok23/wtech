<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithPagination;

class ProductFilters extends Component
{   
    use WithPagination;
    public $brand=[];
    public $size=[];
    public $color=[];
    public $price;
    public $sortPrice;
    
    public $category;
    public $manufacturers;
    public $colors;
    public $sizes;
    public $priceMin;
    public $priceMax;
    public $subcategory;
    public $term;
    public $catName;

    public function mount($params)
    {
        $this->category=$params['category'];
        $this->manufacturers=$params['manufacturers'];
        $this->colors=$params['colors'];
        $this->sizes=$params['sizes'];
        $this->priceMax=$params['priceMax'];
        $this->priceMin=$params['priceMin'];
        $this->term=$params['term'];
        $this->subcategory=$params['subcategory'];
        $this->catName=$params['catName'];

        // $this->price=$params['priceMax'];
    }

    public function render()
    {   
        // $categoryProds=Category::with('products')->where('slug',$this->category)->firstOrFail();
        // $products=$categoryProds->products()
        $productsQuery=Product::query()
        ->whereHas('categories', function ($query){
            $query->where('slug',$this->category);
        })
        ->when($this->subcategory, function ($query){
            $query->whereHas('categories',function($q){$q->where('slug',$this->subcategory);});
        })
        ->when($this->term, function($query){
            $query->where(function ($q){
                $q->where('name','ilike','%'.$this->term.'%')
                ->orWhereHas('manufacturer',function($qq){$qq->where('name','ilike','%'.$this->term.'%');});
            });
        });

        $products=$productsQuery
            ->when($this->price, fn ($query) => $query->where('price','<=',$this->price))
            ->when($this->color, fn ($query) => $query->whereIn('color',$this->color))
            ->when($this->size, function ($query) {
                $query->whereHas('stock',function ($q){$q->whereIn('size',$this->size);});
            })
            ->when($this->brand, function ($query) {
                $query->whereHas('manufacturer',function ($q){$q->whereIn('name',$this->brand);});
            })
            ->when($this->sortPrice, fn ($query) => $query->orderBy('price', $this->sortPrice))
            ->paginate(10);


        return view('livewire.product-filters',
            ['products'=>$products, 'manufacturers'=>$this->manufacturers, 'colors'=>$this->colors, 'sizes'=>$this->sizes, 'priceMin'=>$this->priceMin, 'priceMax'=>$this->priceMax, 'catName'=>$this->catName]);
    }

    public function updatedBrand()
    {
        $this->resetPage();
    }

    public function updatedColor()
    {
        $this->resetPage();
    }

    public function updatedSize()
    {
        $this->resetPage();
    }

    public function updatedPrice()
    {
        $this->resetPage();
    }

    public function sortByPrice(){
        if($this->sortPrice==='asc'){
            $this->sortPrice='desc';
        }
        else{
            $this->sortPrice='asc';
        }
        $this->resetPage();
    }
}
