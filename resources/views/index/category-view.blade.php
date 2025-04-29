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

        <section class="main-content flex-fill d-block d-sm-flex justify-content-center">
            
            @include('layouts.partials.navbar')

            <div class="container">
                <div class="products container roundedContainer">
                    @foreach($products as $product)
                        <div class="suggested-item d-flex flex-column justify-content-between">
                            <a href="/products/{{$product->id}}"><img class="border border-black rounded border-opacity-50" src="{{$product->image}}"></a>
                            <span>{{$product->name}}</span>
                            <span class="productPrice"><strong>${{$product->price}}</strong></span>
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