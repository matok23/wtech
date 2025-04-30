@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endpush

@section('content')
    <main class="d-flex flex-column min-vh-100">
        <header>
            <div class="headerContainer flex-column flex-sm-row gap-2" >
                <div class="dropdowns">
                    <a href="/admin" class="btn btn-primary">&larr; Return to dashboard</a>
                </div>

                <div class="logo">
                    <a href="/landing"><img src="/pictures/logo.png" alt="VoguePointLogo"></a>
                </div>

                <div class="searchButtons">
                    @if(Auth::check())
                        <div class="btn btn-primary h-100" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="{{ Auth::user()->name }}">
                            <i class="zmdi zmdi-account-circle"></i>
                        </div>
                        <form method="POST" action="{{ url('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">Logout</button>
                        </form>
                    @else
                        <a href="/login" class="btn btn-primary">Login</a>
                        <a href="/register" class="btn btn-primary">Register</a>
                    @endif
                </div>

                @push('scripts')
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
                    <script>
                        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
                        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
                    </script>
                @endpush

            </div>
        </header>

        <section class="main-content flex-fill d-block d-sm-flex justify-content-center">
            

            <div class="container">
                <div class="d-flex flex-column justify-content-between">
                    <a href="/products/{{$product->id}}"><img class="border border-black rounded border-opacity-50" src="{{$product->image}}"></a>
                    <span>{{$product->name}}</span>
                    <span class="productPrice"><strong>${{$product->price}}</strong></span>
                    {{ $product->categories[0] }}
                </div>
            </div>

        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>
@endsection