@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <style>
        .info-box {
            background-color: rgba(0, 128, 0, 0.1); /* Zelené priesvitné pozadie */
            border: 2px solid rgba(0, 128, 0, 0.3); /* Zelený okraj */
            border-radius: 8px;
            margin-bottom: 10px;
             }

        .info-box strong {
            color: #006400; /* Zelená farba pre text */
        }
    </style>
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
                            <div class="mb-0 text-start"><strong>User Information</strong></div>
                            <form action="{{ route('checkout.complete') }}" method="POST">
                                @csrf
                                <div class="mb-2">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" name="name" class="form-control form-control-sm" required>
                                </div>
                                <div class="mb-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control form-control-sm" required>
                                </div>
                                <div class="mb-2">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" class="form-control form-control-sm" required>
                                </div>
                                <div class="mb-2">
                                    <label for="address" class="form-label">Street/Number</label>
                                    <input type="text" id="address" name="address" class="form-control form-control-sm" required>
                                </div>
                                <div class="mb-2">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" id="city" name="city" class="form-control form-control-sm" required>
                                </div>
                                <div class="mb-2">
                                    <label for="postal_code" class="form-label">Postal Code</label>
                                    <input type="text" id="postal_code" name="postal_code" class="form-control form-control-sm" required>
                                </div>
                            
                                <!-- Info Boxes -->
                                <div class="info-box">
                                    <p><strong>Coupon:</strong> {{ session('coupon', 'No coupon applied') }}</p>
                                </div>
                            
                                <div class="info-box">
                                    <p><strong>Delivery Method:</strong> {{ session('deliveryMethod.method', 'Not selected') }}</p>
                                </div>
                            
                                <div class="info-box">
                                    <p><strong>Payment Method:</strong> {{ session('paymentMethod.type', 'Not selected') }}</p>
                                </div>
                            
                                <hr>
                            
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
        </section>
       
        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>
@endsection
