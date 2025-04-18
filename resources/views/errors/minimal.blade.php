@extends('layouts.app')

@section('content')
    <main class="d-flex flex-column min-vh-100">
        <header>
            <div class="headerContainer justify-content-center">
                <div class="logo">
                    <a href="/landing"><img src="/pictures/logo.png" alt="VoguePointLogo"></a>
                </div>
            </div>
        </header>
        
        <section class="container flex-fill align-items-center justify-content-center d-flex">
            <div class="row justify-content-center w-100">
                <div class="col-6 d-flex flex-column gap-5 justify-content-center">
                    <h1 class="text-center py-10">
                        @yield('code') | @yield('message')
                    </h1>
                    <a href="{{ url()->previous() }}" class="btn btn-primary text-decoration-none text-black">Return to previous page</a>
                </div>
            </div>   
        </section>

        <footer>
            @include('layouts.partials.footer');
        </footer>
    </main>
@endsection