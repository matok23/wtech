<div class="headerContainer">
    <div class="dropdowns">
        {{-- <div class="dropdown">
            <button class="dropbtn"><a class='text-decoration-none color-inherit text-reset' href='/index/men'>Men</a></button>
            <div class="dropdown-content">
                <a href="#">Shirts</a>
                <a href="#">Pants</a>
                <a href="#">Shoes</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a class='text-decoration-none color-inherit text-reset' href='/index/women'>Women</a></button>
            <div class="dropdown-content">
                <a href="#">Dresses</a>
                <a href="#">Tops</a>
                <a href="#">Shoes</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a class='text-decoration-none color-inherit text-reset' href='/index/kids'>Kids</a></button>
            <div class="dropdown-content">
                <a href="#">T-Shirts</a>
                <a href="#">Jeans</a>
                <a href="#">Shoes</a>
            </div>
        </div> --}}
        <a class='btn btn-primary text-decoration-none' href='/index/men'>Men</a>
        <a class='btn btn-primary text-decoration-none' href='/index/women'>Women</a>
    </div>

    <div class="logo">
        <a href="/landing"><img src="/pictures/logo.png" alt="VoguePointLogo"></a>
    </div>


    <!-- Search and Buttons -->
    <div class="searchButtons">
        <input type="text" placeholder="Search..." class="searchbar h-100" id='searchBar'>
        {{-- <a href="/browsing{{ isset($category) ? '/'.$category : ''}}?term=" class="btn btn-primary">Search!</a> --}}
        @if(Auth::check())
            <div class="btn btn-primary h-100" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="{{ Auth::user()->name }}">
                <i class="zmdi zmdi-account-circle"></i>
            </div>
            <form method="POST" action="{{ url('logout') }}">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        @else
            <a href="/login" class="btn btn-primary">Login</a>
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