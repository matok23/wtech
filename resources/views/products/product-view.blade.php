@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endpush

@section('content')

    <main class="d-flex flex-column min-vh-100">
        <header>
            @include('layouts.partials.header')
        </header>

        <section class="mainContent">
            <div class="left-sidebar">
                <div class="categoryDropdown">
                    <button class="categoryBtn">Shirts</button>
                    <div class="categoryContent">
                        <a href="#">T-Shirts</a>
                        <a href="#">Long sleeve</a>
                        <a href="#">Gym</a>
                        <a href="#">Other</a>
                    </div>
                </div>
                <div class="categoryDropdown">
                    <button class="categoryBtn">Pants</button>
                    <div class="categoryContent">
                        <a href="#">Shorts</a>
                        <a href="#">Jeans</a>
                        <a href="#">Other</a>
                    </div>
                </div>
                <div class="categoryDropdown">
                    <button class="categoryBtn">Shoes</button>
                    <div class="categoryContent">
                        <a href="#">Running</a>
                        <a href="#">Indoor</a>
                        <a href="#">Leather</a>
                        <a href="#">Flip-flops</a>
                        <a href="#">Hiking</a>
                        <a href="#">Other</a>
                    </div>
                </div>
                <div class="categoryDropdown">
                    <button class="categoryBtn">Accessories</button>
                    <div class="categoryContent">
                        <a href="#">Bracelets</a>
                        <a href="#">Necklaces</a>
                        <a href="#">Galaxy gas</a>
                        <a href="#">Wallet</a>
                        <a href="#">Other</a>
                    </div>
                </div>
                <div class="categoryDropdown">
                    <button class="categoryBtn">Hats</button>
                    <div class="categoryContent">
                        <a href="#">Bucket hats</a>
                        <a href="#">Caps</a>
                        <a href="#">Durags</a>
                        <a href="#">Other</a>
                    </div>
                </div>
            </div>
            
            <div class="col-1 productPageRight">
                <div class="productContainer roundedContainer">
                    <div class="productImg">
                        <img src="{{$productSingle->image}}">
                    </div>
                    <div class="productDetails">
                        <h1>{{$productSingle->name}}</h1>
                        <h5>{{$productSingle->manufacturer->name}}</h5>
                        <div class="productInfo d-flex align-items-stretch justify-content-between gap-2">
                            <div class="productPrice d-flex align-items-center"><strong>${{$productSingle->price}}</strong></div>
                            <div class="sizeSelect d-flex align-items-center gap-2">
                                <div>Size:</div>
                                <select class="h-100 w-auto">
                                    <option value=""></option>
                                    @foreach($productSingle->stock as $stock)
                                        <option value="{{$stock->size}}">
                                            {{$stock->size}}:
                                            @if($stock->stock_left<=5)
                                                {{$stock->stock_left}}
                                            @else
                                                >5
                                            @endif
                                            left
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="productCart">
                                <input type="number" min="1" value="1" step="1">
                                <button><i class="zmdi zmdi-shopping-cart-plus"></i></button>
                            </div>
                        </div>
                        <hr>
                        <div class="productDescription">
                            <h3>Product description</h3>
                            <p>{{$productSingle->description}}</p>
                        </div>
                    </div>
                </div>

                <div class="suggestedItemsContainer">
                    <h2 class="suggestedHeader">
                        Similar items
                    </h2>

                    <div class="suggestedItems roundedContainer">
                        @foreach($products as $product)
                            <div class="suggested-item d-flex flex-column justify-content-between">
                                <a href="/products/{{$product->id}}"><img class="border border-black rounded border-opacity-50" src="{{$product->image}}"></a>
                                <span>{{$product->name}}</span>
                                <span class="productPrice"><strong>${{$product->price}}</strong></span>
                                <button><i class="zmdi zmdi-shopping-cart-plus"></i></button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>

@endsection