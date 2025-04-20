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
            <div class="row my-3 justify-content-center">
                <div class="col-4">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <div class="row my-3 justify-content-evenly align-items-start">
                <div class="col-6 p-2 d-flex flex-column gap-2 roundedContainer">
                    @if(count($cartItems) > 0)  {{-- Zmeň 'cart' na 'cartItems' --}}
                        @foreach($cartItems as $item)
                            <div class="cartItem container-fluid text-center p-2">
                                <div class="row justify-content-center justify-content-xl-between">
                                    <div class="col-4 d-none d-xl-block align-self-center">
                                        <a href="#"><img class="border border-black border-opacity-50 rounded" src="{{ $item->product->image }}"></a>
                                    </div>
                                    <div class="col-9 col-xl-5 text-start d-flex flex-column justify-content-evenly gap-2">
                                        <table>
                                            <thead><h3>{{ $item->product->name }}</h3></thead>
                                            <tbody>
                                                <tr>
                                                    <td>Price</td>
                                                    <td><strong class="productPrice">${{ $item->product->price }}</strong></td>  {{-- Oprava prístupu k cene --}}
                                                </tr>
                                                <tr>
                                                    <td>Size</td>
                                                    <td>
                                                        <select>
                                                            @foreach($item->product->stock as $size)  {{-- Použi stock, nie size --}}
                                                                <option value="{{ $size->size }}">{{ $size->size }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Amount</td>
                                                    <td><input type="number" min="1" value="{{ $item->amount }}" step="1"></td>  {{-- Oprava prístupu k množstvu --}}
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="productLogo col-3 col-lg-2 d-flex flex-column align-items-end justify-content-end justify-content-xl-between">
                                        <form action="{{ route('cart.remove', $item->product_id) }}" method="GET" class="w-100">
                                            <button class="p-1 w-100 text-white border-0 rounded">
                                                <i class="zmdi zmdi-delete fs-4"></i>
                                            </button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <a href="{{ route('checkout') }}" class="w-100 btn btn-primary d-flex align-items-center justify-content-center">
                            Finish your order
                            <i class="ms-2 zmdi zmdi-assignment-check"></i>
                        </a>
                                            @else
                        <p>Your cart is empty.</p>
                    @endif
                </div>

                <div class="col-4 p-2 roundedContainer">
            
                    <hr>
                    <div class="d-flex flex-column gap-2 p-2">
                        <div class="d-flex justify-content-between align-items-center px-2">
                            <div class="mb-0 text-start">Coupon</div>
                            <button class="btn btn-primary" id="coupon-btn">ADD</button>
                        </div>
                        <div id="couponOutput" class="text-start d-none px-2"></div>

                        <div class="d-flex justify-content-between align-items-center px-2">
                            <div class="mb-0 text-start">Delivery method</div>
                            <button class="btn btn-primary" id="delivery-btn">ADD</button>
                        </div>
                        <div id="deliveryOutput" class="text-start d-none px-2"></div>

                        <div class="d-flex justify-content-between align-items-center px-2">
                            <div class="mb-0 text-start">Payment method</div>
                            <button class="btn btn-primary" id="payment-btn">ADD</button>
                        </div>
                        <div id="paymentOutput" class="text-start d-none px-2"></div>
                    </div>
                    <hr>
                    <div class="">
                        <a href="{{ route('checkout') }}" class="w-100 btn btn-primary d-flex align-items-center justify-content-center">Proceed to checkout<i class="ms-2 zmdi zmdi-assignment-check"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>
@endsection
