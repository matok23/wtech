@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endpush

@section('content')
    <main class="d-flex flex-column min-vh-100">
        <header>
            @include('layouts.partials.header')
        </header>

        <section class="container text-center flex-fill d-flex flex-column justify-content-center">
            <div class="row my-3 justify-content-evenly">
                <div class="col-4">
                    <div class="p-1"><h2>Checkout</h2></div>
                </div>
            </div>

            <div class="row my-3 justify-content-evenly align-items-start">
                <div class="col-6 p-2 d-flex flex-column gap-2 roundedContainer">

                    {{-- Iterácia cez produkty v košíku --}}
                    
                    @foreach($cartItems as $item)
                    <div class="cartItem container-fluid text-center p-2">
                        <div class="row justify-content-center justify-content-xl-between">
                            <div class="col-4 d-none d-xl-block align-self-center">
                                <a href="#"><img class="border border-black border-opacity-50 rounded" src="{{ $item['product']->image }}" alt="product image"></a>

                            </div>
                            <div class="col-10 col-xl-5 text-start d-flex flex-column justify-content-evenly gap-2">
                                <table>
                                    <thead><h3>{{ $item['product']->name }}</h3></thead>
                                    <tbody>
                                        <tr>
                                            <td>Price</td>
                                            <td><strong class="productPrice">${{ number_format($item['product']->price, 2) }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Size</td>
                                            <td>{{ $item['size'] }}</td>
                                        </tr>
                                        <tr>
                                            <td>Amount</td>
                                            <td>{{ $item['quantity'] }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="productLogo col-2 d-none d-xl-block align-self-start">
                                <img class="rounded-5 border border-black border-opacity-50" src="{{ $item['product']->brand_logo }}" alt="brand logo">
                            </div>
                        </div>
                    </div>
                @endforeach
                
                </div>

                {{-- Box pre zhrnutie objednávky --}}
                <div class="col-5 col-md-4 p-2 roundedContainer">
                    @if(session('order_success'))
                    <div class="alert alert-success">
                        <strong>{{ session('order_success') }}</strong>
                    </div>
                @endif
                    <div class="p-2"><h3>Your total: ${{ number_format($total, 2) }}</h3></div>
                    <hr>
                    <div class="d-flex flex-column gap-2 p-2">
                        <div class="d-flex flex-column gap-2 justify-content-between align-items-center px-2">
                            <div class="mb-0 text-start"><strong>Delivery method</strong></div>
                            <p>name<br>email<br>phone number<br>address line 1<br>address line 2<br>method 1</p>
                        </div>
                        <div class="d-flex flex-column gap-2 justify-content-between align-items-center px-2">
                            <span class="mb-0 text-start"><strong>Payment method</strong></span>
                            <p>visa *1234</p>
                        </div>
                    </div>
                    <hr>
                 <!-- V šablóne cart.blade.php -->
<form action="{{ route('checkout.complete') }}" method="POST">
    @csrf
    <div class="d-flex gap-2">
        <a href="{{ route('cart.index') }}" class="w-100 btn btn-primary d-flex align-items-center justify-content-center">
            Return<i class="ms-2 zmdi zmdi-assignment-return"></i>
        </a>
        <button type="submit" class="w-100 btn btn-primary d-flex align-items-center justify-content-center">
            Finish your order<i class="ms-2 zmdi zmdi-assignment-check"></i>
        </button>
    </div>
</form>

                </div>
            </div>
        </section>
       
        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>
@endsection
