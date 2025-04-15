<!doctype html>
<html lang="sk">
<head>
    @include('layouts.partials.head')
    @stack('styles')
</head>

<body>
    {{-- @include('layouts.partials.nav') --}}
  
    @yield('content')
</body>
</html>