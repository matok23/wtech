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
                        <div>{{$product->name}} {{$product->manufacturer->name}} {{$product->price}}</div>
                        @foreach($product->stock as $stock)
                            <div>{{$stock->size}} {{$stock->stock_left}}</div>
                        @endforeach
                        @foreach($product->categories as $category)
                            <div>{{$category->name}}</div>
                        @endforeach
                        <img src="{{$product->image}}">
                        <div>{{$product->description}}</div>
                    </div>
                </div>
            @endforeach
        </section>
        @foreach($sizestock as $stock)
            <div>{{$stock->size}} {{$stock->stock_left}} {{$stock->product->name}}</div>
        @endforeach

        @foreach($categories as $category)
            <h3>{{$category->name}}</h3>
            @foreach($category->products as $product)
                <div>{{$product->name}} {{$product->pivot}}</div>
            @endforeach
        @endforeach
        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>

@endsection