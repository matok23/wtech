@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
@endpush

@section('content')
    <main class="d-flex flex-column min-vh-100">
        <header>
            @include('layouts.partials.header')
        </header>

        <section class="main-content flex-fill text-center d-flex flex-column justify-content-center">
            
            <div class="container p-2 ">
                <div class="row justify-content-center">
                    <div class="col-9 col-lg-4 roundedContainer py-2 align-items-center">
                        <h2>Login</h2>

                        <form class="auth-form" action="{{url('login')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                            <input type="password" name="password" placeholder="Heslo" required>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <button type="submit" class="submit-btn">Login</button>
                        </form>

                    </div>
                </div>
            </div>

        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>
    </main>
@endsection