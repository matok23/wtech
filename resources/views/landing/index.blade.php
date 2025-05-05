@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endpush

@section('content')
    <main class="d-flex flex-column min-vh-100">
        <header>
            <div class="headerContainer justify-content-center">
                <div class="logo">
                    <a href="/landing"><img src="pictures/logo.png" alt="VoguePointLogo"></a>
                </div>
            </div>
        </header>

        <section class="landingContainer container flex-fill d-flex flex-column justify-content-center">
            <div class="row justify-content-center gap-5">
                <div class="landImgContainer col-5 px-0">
                    <a href="/index/women"><img src="/pictures/landing_women.jpg"></a>
                    <div class="imageOverlay">WOMEN</div>
                </div>
                <div class="landImgContainer col-5 px-0">
                    <a href="/index/men"><img src="/pictures/landing_men.jpg"></a>
                    <div class="imageOverlay">MEN</div>
                </div>
            </div>
        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>
@endsection