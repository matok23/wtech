@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@section('content')
    <main class="d-flex flex-column min-vh-100">
        <header>
            @include('layouts.partials.header')
        </header>
        @if(session('order_success'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Objednávka bola úspešná!',
                    text: '{{ session('order_success') }}',
                    confirmButtonText: 'Pokračovať',
                });
            });
        </script>
    @endif
        @include('layouts.partials.banner')

        <section class="main-content flex-fill">
            
            @include('layouts.partials.navbar')

            {{-- <div class="products container roundedContainer">
                @foreach($products as $product)
                    <div class="product d-flex flex-column justify-content-between">
                        <img src="{{ $product->image }}" alt="">
                        <h3>{{$product->name}}</h3>
                        <p>{{$product->price}}</p>
                        <button>Add to Cart</button>
                    </div>
                @endforeach
            </div> --}}

            <div class="container">
            <div class="products container roundedContainer">
                @foreach($products as $product)
                    <div class="suggested-item d-flex flex-column justify-content-between">
                        <a href="/products/{{$product->id}}"><img class="border border-black rounded border-opacity-50" src="{{$product->image}}"></a>
                        <span>{{$product->name}}</span>
                        <span class="productPrice"><strong>${{$product->price}}</strong></span>
                        {{-- <button><i class="zmdi zmdi-shopping-cart-plus"></i></button> add this back --}}
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $products->links('layouts.partials.paginator') }}
            </div>
            </div>

        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>
@endsection