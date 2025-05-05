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
            {{-- @include('layouts.partials.navbar') --}}
          
            <div class="col-1 productPageRight">
                <div class="productContainer roundedContainer">
                    <div class="productImg">
                        {{-- <img src="{{$productSingle->image}}"> --}}
                        @unless (count($productSingle->images))
                            <img src="/pictures/unavailable-image.jpg">
                        @else
                            <div id="productsCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($productSingle->images as $index=>$image)
                                        <div class="carousel-item @if($index===0) active @endif">
                                            <img src="{{ asset('storage/' . $image->url) }}" class="d-block w-100 rounded" alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#productsCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#productsCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        @endunless
                    </div>
                    <div class="productDetails">
                        <h1>{{$productSingle->name}}</h1>
                        <h5>{{$productSingle->manufacturer->name}}</h5>
                        <div class="productInfo d-flex align-items-stretch @unless (count($productSingle->stock)) justify-content-start @else justify-content-between @endunless gap-2">
                            <div class="productPrice d-flex align-items-center"><strong>${{$productSingle->price}}</strong></div>
                            <div class="productCart">
                                <!-- Formulár s POST metódou -->
                                <form method="POST" action="{{ url('cart/add') }}" class="d-flex align-items-center gap-2">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $productSingle->id }}">
                                    
                                    <!-- Select size inside the form -->
                                    @unless (count($productSingle->stock))
                                        <div>Out of stock</div>
                                    @else
                                        <input type="number" name="amount" min="1" value="1" step="1" class="form-control w-auto">
                                        <select name="size" class="h-100 w-auto">
                                            {{-- dd($request->all()); --}}

                                            <option value="" selected>Select Size</option>
                                            @foreach($productSingle->stock as $stock)
                                                <option value="{{ $stock->size }}">
                                                    {{$stock->size}}:
                                                    @if($stock->stock_left <= 5)
                                                        {{$stock->stock_left}}
                                                    @else
                                                        >5
                                                    @endif
                                                    left
                                                </option>
                                            @endforeach

                                        </select>
                                        <button type="submit" class="btn btn-primary h-100">Add to cart <i class="zmdi zmdi-shopping-cart-plus"></i></button>
                                    @endunless

                                </form>
                            </div>
                        </div>
                        <hr>
                        <div class="productDescription">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
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
                                {{-- <button><i class="zmdi zmdi-shopping-cart-plus"></i></button> add this back !!!--}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>

        <script>
            document.querySelector('.productCart input[type=number][name="amount"]').addEventListener('change',ev=>{
                ev.target.value=Math.max(1,Math.round(ev.target.value))
            });
        </script>
    </main>

@endsection
