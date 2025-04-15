@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endpush

@section('content')
    <main class="d-flex flex-column min-vh-100">
        <header>
            @include('layouts.partials.header')
        </header>

        <section class="landingContainer container flex-fill d-flex flex-column justify-content-center">
            <div class="row justify-content-center gap-5">
                <div class="landImgContainer col-5 px-0">
                    <a href="./index.html"><img src="https://nyerblobstoreprod.blob.core.windows.net/cms-startpage-public/742184e20d61d0fe2f7def875b06787c.jpg"></a>
                    <div class="imageOverlay">WOMEN</div>
                </div>
                <div class="landImgContainer col-5 px-0">
                    <a href="./index.html"><img src="https://nyerblobstoreprod.blob.core.windows.net/cms-startpage-public/3cb98237772ff2b55607289ceab61b0e.jpg"></a>
                    <div class="imageOverlay">MEN</div>
                </div>
            </div>
        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>
@endsection