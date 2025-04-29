<div class="container">
    @unless ($products->count())
            <div class="container roundedContainer h-100 d-flex flex-column justify-content-center">
                <h1 class="text-center">No products found &#128557;</h1>
            </div>
    @else
        <div class="categorySection row pb-3 text-center ">
            @isset($subcategory)
                <h1>{{ $catName }}</h1>
            @endisset
            <div class="filterButtons">
                <div class="dropdown">
                    <button class="filterBtn" >Size</button>
                    <div id="sizeDropdown" class="dropdown-content">
                        @foreach($sizes as $size)
                            <label><input type="checkbox" wire:model.lazy='size' value="{{ $size }}">{{ $size }}</label>
                        @endforeach
                    </div>
                </div>
                
                <div class="dropdown">
                    <button class="filterBtn" >Color</button>
                    <div id="colorDropdown" class="dropdown-content">
                        @foreach($colors as $color)
                            <label><input type="checkbox" wire:model.lazy='color' value="{{ $color }}">{{ $color }}</label>
                        @endforeach
                    </div>
                </div>
                
                <div class="dropdown">
                    <button class="filterBtn" >Brand</button>
                    <div id="brandDropdown" class="dropdown-content">
                        @foreach($manufacturers as $manufacturer)
                            <label><input type="checkbox" wire:model.lazy="brand" value="{{ $manufacturer }}">{{ $manufacturer }}</label>
                        @endforeach
                    </div>
                </div>
                
                <div class="dropdown">
                    <button class="filterBtn" >Price</button>
                    <div id="priceDropdown" class="dropdown-content">
                        <input type="range" wire:model.lazy="price" min="{{ $priceMin }}" max="{{ $priceMax }}" class="slider" id="priceRange" style="accent-color: #8e5bf3b5;">
                        <span id="priceValue">
                            @isset($price)
                                ${{ $price }}
                            @else
                                ${{ $priceMax }}
                            @endisset
                        </span>
                    </div>
                </div>

                <button wire:click="sortByPrice" class="filterBtn">
                    Sort by Price
                    @if ($sortPrice === 'asc')
                        ↑
                    @elseif ($sortPrice === 'desc')
                        ↓
                    @endif
                </button>

            </div>
        </div>

        <div class="products container roundedContainer">
            @foreach($products as $product)
                {{-- <div class="product d-flex flex-column justify-content-between">
                    <img src="{{ $product->image }}" alt="">
                    <h3>{{$product->name}}</h3>
                    <p>{{$product->price}}</p>
                    <button>Add to Cart</button>
                </div> --}}
                <div class="suggested-item d-flex flex-column justify-content-between">
                    <a href="/products/{{$product->id}}"><img class="border border-black rounded border-opacity-50" src="{{$product->image}}"></a>
                    <span>{{$product->name}}</span>
                    <span class="productPrice"><strong>${{$product->price}}</strong></span>
                    {{-- <button><i class="zmdi zmdi-shopping-cart-plus"></i></button> add this back !!! --}}
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $products->links('livewire.paginator') }}
        </div>

        <script>
            document.getElementById('priceRange').oninput = function() {
                document.getElementById('priceValue').innerText = '$' + this.value ;
            };
        </script>
    @endunless
</div>
