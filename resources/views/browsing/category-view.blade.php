@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/browsing.css') }}">
    @livewireStyles
@endpush

@section('content')
    <main class="d-flex flex-column min-vh-100">
        <header>
            @include('layouts.partials.header')
        </header>

        <section class="main-content flex-fill d-block d-md-flex justify-content-center">
            
            @include('layouts.partials.navbar')

            @php
                $params=compact('category','manufacturers','colors','sizes','priceMin','priceMax','subcategory','term','catName')
            @endphp

            @livewire('product-filters', ['params'=>$params])
        

        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>

    @livewireScripts 
@endsection