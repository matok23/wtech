@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
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
                        text: '{{ session('order_success') }}', // Here session is correctly passed
                        confirmButtonText: 'Pokračovať',
                    });
                });
            </script>
        @endif

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

            <div class="info-box">
                <p><strong>{{ session('order_success') }}</strong></p>
            </div>
        
   
        
            <div class="row my-3 justify-content-evenly align-items-start gap-2">
                <div class="col-9 col-md-6 p-2 d-flex flex-column gap-2 roundedContainer">
                    @if(count($cartItems))  {{-- Zmeň 'cart' na 'cartItems' --}}
                        @foreach($cartItems as $item)
                            <div class="cartItem container-fluid text-center p-2">
                                <div class="row justify-content-center justify-content-xl-between">
                                    <div class="col-4 d-none d-xl-block align-self-center">
                                        <a href="/products/{{ $item->product->id }}">
                                            <img class="border border-black border-opacity-50 rounded"
                                                @if(count($item->product->images)) src="{{asset('storage/' . $item->product->images[0]->url)}}" @else src="/pictures/unavailable-image.jpg" @endif>
                                        </a>
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
                                                        {{ $item->size }}
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
                                        <form action="{{ route('cart.remove', ['product' => $item->product_id, 'size' => $item->size]) }}" method="POST" class="w-100">
                                            @csrf
                                            @method('DELETE')
                                            <button class="p-1 w-100 text-white border-0 rounded btn btn-danger" type="submit">
                                                <i class="zmdi zmdi-delete fs-4"></i>
                                            </button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    @else
                        <p style="font-size: 1.5rem; color: red; ">Your cart is empty.</p>
                        @if(session('order_products'))
                            <div class="info-box">
                                <p><strong>Order Summary:</strong></p>
                                <ul class="mb-0">
                                    @foreach(session('order_products') as $product)
                                        <li>
                                            <strong>{{ $product['name'] }}</strong>: ordered {{ $product['ordered'] }}, 
                                            {{-- <span style="color: {{ $product['stock_left'] == 0 ? 'red' : 'green' }}">
                                                stock left: {{ $product['stock_left'] }}
                                            </span> --}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endif
                </div>

                <div class="col-9 col-md-5 p-2 roundedContainer">
            
                    <hr>
                    <div class="d-flex flex-column gap-2 p-2">
                        <div class="d-flex justify-content-between align-items-center px-2">
                            <div class="mb-0 text-start">Coupon</div>
                            <button type="button" class="btn btn-primary" id="coupon-btn">ADD</button>
                        </div>
                        <div id="couponOutput" class="text-start d-none px-2"></div>

                        <div class="d-flex justify-content-between align-items-center px-2">
                            <div class="mb-0 text-start">Delivery method</div>
                            <button type="button" class="btn btn-primary" id="delivery-btn">ADD</button>
                        </div>
                        <div id="deliveryOutput" class="text-start d-none px-2"></div>

                        <div class="d-flex justify-content-between align-items-center px-2">
                            <div class="mb-0 text-start">Payment method</div>
                            <button type="button" class="btn btn-primary" id="payment-btn">ADD</button>
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



        @push('scripts')
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const couponBtn = document.getElementById('coupon-btn');
                    const deliveryBtn = document.getElementById('delivery-btn');
                    const paymentBtn = document.getElementById('payment-btn');

                    couponBtn.addEventListener('click', () => {
                        // Otvor formulár pre kupon
                        const couponOutput = document.getElementById('couponOutput');
                        couponOutput.classList.remove('d-none');
                        couponOutput.innerHTML = `
                            <label for="couponInput" class="form-label mt-2">Enter coupon code:</label>
                            <input type="text" maxlength="5" class="form-control" id="couponInput" name="coupon" placeholder="Max 5 characters">
                        `;

                        // Uložíme kupon do session cez AJAX
                        const input = document.getElementById('couponInput');
                        input.addEventListener('change', () => {
                            fetch('{{ route('cart.updateCoupon') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    coupon: input.value
                                })
                            });
                        });
                    });

                    deliveryBtn.addEventListener('click', () => {
                        // Otvor formulár pre doručenie
                        const deliveryOutput = document.getElementById('deliveryOutput');
                        deliveryOutput.classList.remove('d-none');
                        const selectedDelivery = "{{ session('deliveryMethod.method', 'GLS') }}"; // Predvolená hodnota je 'GLS', ak nie je v session

                        deliveryOutput.innerHTML = `
                            <label for="deliverySelect" class="form-label mt-2">Choose delivery method:</label>
                            <select class="form-select" id="deliverySelect" name="delivery">
                                <option value="GLS" ${selectedDelivery === 'GLS' ? 'selected' : ''}>GLS</option>
                                <option value="POSTA" ${selectedDelivery === 'POSTA' ? 'selected' : ''}>Pošta</option>
                                <option value="POBOCKA" ${selectedDelivery === 'POBOCKA' ? 'selected' : ''}>Na pobočke</option>
                            </select>
                        `;

                        // Uložíme doručenie do session cez AJAX
                        const select = document.getElementById('deliverySelect');
                        select.addEventListener('change', () => {
                            fetch('{{ route('cart.updateDelivery') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    delivery: select.value
                                })
                            });
                        });
                    });

                    paymentBtn.addEventListener('click', () => {
                        // Otvor formulár pre platbu
                        const paymentOutput = document.getElementById('paymentOutput');
                        paymentOutput.classList.remove('d-none');
                        const selectedPayment = "{{ session('paymentMethod.method', 'DOBIERKA') }}"; // Predvolená hodnota je 'DOBIERKA', ak nie je v session

                        paymentOutput.innerHTML = `
                            <label for="paymentSelect" class="form-label mt-2">Choose payment method:</label>
                            <select class="form-select" id="paymentSelect" name="payment">
                                <option value="DOBIERKA" ${selectedPayment === 'DOBIERKA' ? 'selected' : ''}>Na dobierku</option>
                                <option value="APPLE PAY" ${selectedPayment === 'APPLE PAY' ? 'selected' : ''}>Apple Pay</option>
                                <option value="VISA" ${selectedPayment === 'VISA' ? 'selected' : ''}>Visa</option>
                            </select>
                        `;

                        // Uložíme platbu do session cez AJAX
                        const select = document.getElementById('paymentSelect');
                        select.addEventListener('change', () => {
                            fetch('{{ route('cart.updatePayment') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    payment: select.value
                                })
                            });
                        });
                    });
                });
            </script>
        @endpush

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>
@endsection
