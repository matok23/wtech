<div class="headerContainer flex-column flex-sm-row gap-2" >
    <div class="dropdowns">
        <a class='btn btn-primary text-decoration-none' href='/index/men'>Men</a>
        <a class='btn btn-primary text-decoration-none' href='/index/women'>Women</a>
    </div>

    <div class="logo">
        <a href="/landing"><img src="/pictures/logo.png" alt="VoguePointLogo"></a>
    </div>


    <!-- Search and Buttons -->
    <div class="searchButtons">
        <input type="text" placeholder="Search..." class="searchbar h-100" id='searchBar'>
        @if(Auth::check())
            <div class="btn btn-primary h-100" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="{{ Auth::user()->name }}">
                <i class="zmdi zmdi-account-circle"></i>
            </div>
            @if (Auth::user()->role==='admin')
                <a href="/admin" class="btn btn-primary">Admin dashboard</a>
            @endif
            <form method="POST" action="{{ url('logout') }}">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        @else
            <a href="/login" class="btn btn-primary">Login</a>
            <a href="/register" class="btn btn-primary">Register</a>
        @endif
        <a href="/cart" class="btn btn-primary d-flex align-items-center justify-content-center gap-2">Cart<i class="zmdi zmdi-shopping-cart"></i></a>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        <script>
            document.getElementById('searchBar').addEventListener('change',(ev)=>{
                ev.preventDefault();
                window.location.href="/browsing{{ isset($category) ? '/'.$category : ''}}?term=" + ev.target.value;
            })

            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
        </script>
    @endpush
</div>