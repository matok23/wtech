@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@section('content')
    <main class="d-flex flex-column min-vh-100">
        <header>
            @include('layouts.partials.header')
        </header>

        @include('layouts.partials.banner')

        <section class="main-content flex-fill">
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
        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>
@endsection