<!doctype html>
<html lang="sk">
<head>
    @include('layouts.partials.head')
    @stack('styles')
</head>

<body>
    @if(session('message'))
        <script>
            alert("{{ session('message') }}");
        </script>
    @endif

    @yield('content')
    @stack('scripts')

</body>
</html>