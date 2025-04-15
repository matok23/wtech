@extends('layouts.app')

@section('content')

    <main class="d-flex flex-column min-vh-100">
        <header>
            @include('layouts.partials.header')
        </header>

        <section class="container flex-fill">
            @foreach($products as $product)
                <div class="row">
                    <div class="col-6">
                        <div>{{$product->name}} {{$product->price}}</div>
                        <img src="{{$product->image}}">
                        <div>{{$product->description}}</div>
                    </div>
                </div>
            @endforeach
        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>

@endsection