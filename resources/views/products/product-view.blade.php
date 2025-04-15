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
                        <h5>Gucci</h5>
                        <div class="productInfo">
                            <span class="productPrice"><strong>${{$productSingle->price}}</strong></span>
                            <span class="productLeftAmount"><strong>1</strong> left in stock</span>
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
                                <a href="#"><img class="border border-black rounded border-opacity-50" src="{{$product->image}}"></a>
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