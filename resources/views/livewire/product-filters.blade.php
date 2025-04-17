<div class="container">
    <div class="categorySection row pb-3">
        <h1 class="categoryTitle">Category - Women's Shoes</h1>
        <div class="filterButtons">
            <div class="dropdown">
                <button class="filterBtn" >Size</button>
                <div id="sizeDropdown" class="dropdown-content">
                    <label><input type="checkbox" value="S"> S</label>
                    <label><input type="checkbox" value="M"> M</label>
                    <label><input type="checkbox" value="L"> L</label>
                    <label><input type="checkbox" value="XL"> XL</label>
                </div>
            </div>
            
            <div class="dropdown">
                <button class="filterBtn" >Color</button>
                <div id="colorDropdown" class="dropdown-content">
                    <label><input type="checkbox" value="Red"> Red</label>
                    <label><input type="checkbox" value="Blue"> Blue</label>
                    <label><input type="checkbox" value="Green"> Green</label>
                    <label><input type="checkbox" value="Black"> Black</label>
                </div>
            </div>
            
            <div class="dropdown">
                <button class="filterBtn" >Brand</button> {{-- onclick="toggleDropdown('brandDropdown')" --}}
                <div id="brandDropdown" class="dropdown-content">
                    <label><input type="checkbox" wire:model="brand" value="Adidas"> Adidas</label>
                    <label><input type="checkbox" wire:model="brand" value="Puma"> Puma</label>
                    <label><input type="checkbox" wire:model="brand" value="Reebok"> Reebok</label>
                </div>
            </div>
            
            <div class="dropdown">
                <button class="filterBtn" >Price</button>
                <div id="priceDropdown" class="dropdown-content">
                    <input type="range" min="1" max="500" value="100" class="slider" id="priceRange" style="accent-color: #8e5bf3b5;">
                    <span id="priceValue">100€</span>
                </div>
            </div>
        </div>
    </div>

    <pre>{{ var_dump($brand) }}</pre>

    <input type="text" wire:model="test">
    <p>You typed: {{ $test }}</p>

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
</div>
