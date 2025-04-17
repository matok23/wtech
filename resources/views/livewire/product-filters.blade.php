<div class="container">
    <div class="categorySection row pb-3">
        <h1 class="categoryTitle">Category - Women's Shoes</h1>
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
                    <span id="priceValue">${{ $price }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="products container roundedContainer">
        @foreach($products as $product)
            <div class="product d-flex flex-column justify-content-between">
                <img src="{{ $product->image }}" alt="">
                <h3>{{$product->name}}</h3>
                <p>{{$product->price}}</p>
                <button>Add to Cart</button>
            </div>
        @endforeach
    </div>

    <script>
        document.getElementById('priceRange').oninput = function() {
            document.getElementById('priceValue').innerText = '$' + this.value ;
        };
    </script>
</div>
