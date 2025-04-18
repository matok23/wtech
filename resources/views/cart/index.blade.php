@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endpush

@section('content')
    <main class="d-flex flex-column min-vh-100">
        <header>
            @include('layouts.partials.header')
        </header>

        <section class="main-content flex-fill">
            
            cc

        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>
@endsection