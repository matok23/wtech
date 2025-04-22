@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/browsing.css') }}">
    @livewireStyles
@endpush

@section('content')
    <main class="d-flex flex-column ">
        <header>
            @include('layouts.partials.header')
        </header>

        <section class="main-content flex-fill">
            
            @include('layouts.partials.navbar')

            @php
                $params=compact('category','manufacturers','colors','sizes','priceMin','priceMax','subcategory','term','catName')
            @endphp

            @livewire('product-filters', ['params'=>$params])
            {{-- ['category'=>$category, 'manufacturers'=>$manufacturers, 'colors'=>$colors, 'sizes'=>$sizes, 'priceMin'=>$priceMin, 'priceMax'=>$priceMax, 'subcategory'=>$subcategory, 'term'=>$term])
             <livewire:product-filters :category="$category" /> --}}

        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>

    @livewireScripts {{-- (['nprogress' => false]) --}}
@endsection