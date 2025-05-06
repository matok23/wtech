@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endpush

@section('content')
    <main class="d-flex flex-column min-vh-100">
        <header>
            <div class="headerContainer flex-column flex-sm-row gap-2" >
                <div class="dropdowns">
                </div>

                <div class="logo">
                    <a href="/landing"><img src="/pictures/logo.png" alt="VoguePointLogo"></a>
                </div>

                <div class="searchButtons">
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
                        <a href="/register" class="btn btn-primary">Register</a>
                    @endif
                </div>

                @push('scripts')
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
                    <script>
                        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
                        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
                    </script>
                @endpush

            </div>
        </header>

        <div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    You are about to delete product with id <span id='showProduct'></span>.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">DISMISS</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">CONFIRM</button>
                </div>
                </div>
            </div>
        </div>

        <form id="deleteForm" method="POST" class="d-none">
            @csrf
            @method('DELETE')
        </form>

        <section class="main-content flex-fill justify-content-center">
            <div class="row justify-content-around w-100">

                <div class="container col-11 col-md-5 p-2">
                    <div class="row justify-content-center sticky-row">
                        <div class="col-11 col-xl-9 roundedContainer row p-2 d-flex flex-column justify-content-evenly align-items-center gap-2">
                            <h2>New product</h2>
                            
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="d-flex flex-column justify-content-evenly align-items-center gap-2">
                                @csrf
                                <input type="text" name="name" class="form-control" placeholder="name" value="{{ old('name') }}">
                                <textarea name="description" class="form-control" placeholder="description">{{ old('description') }}</textarea>
                                <input type="number" name="price" class="form-control" placeholder="price" value="{{ old('price') }}" step="0.01">
                                <input type="text" name="color" class="form-control" placeholder="color" value="{{ old('color') }}">

                                <div class="d-flex justify-content-end align-items-center gap-2 w-100">
                                    <div class="">Images:</div>
                                    <input class="form-control w-100" type="file" multiple name="images[]" class="form-control" accept="image/*" value="{{ old('images[]') }}">
                                </div>
                                
                                <div class="d-flex justify-content-end align-items-center gap-2 w-100">
                                    <div class="">Brand:</div>
                                    <select name="manufacturer_id" class="w-100 form-select">
                                        <option value="" disabled selected></option>
                                        @foreach($manufacturers as $manufacturer)
                                            <option value="{{ $manufacturer->id }}">
                                                {{$manufacturer->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="d-flex justify-content-end align-items-center gap-2 w-100">
                                    <label class="form-label">Categories:</label>

                                    <div class="w-100 category-select p-2">
                                        @foreach ($categories as $category)
                                            <div class="form-check">
                                                <label for="" class="form-check-label">{{ $category->name }}</label>
                                                <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $category->id }}" 
                                                    @if(in_array($category->id, old('categories',[]))) checked @endif>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success w-50">CREATE</button>
                            </form>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>

                <div class="container col-11 col-md-5 d-flex flex-column gap-2 p-2">
                    @foreach ($products as $product)
                        <div class="row justify-content-center">
                            <div class="col-11 col-xl-9 roundedContainer p-2 product">
                                <div class="row justify-content-evenly">
                                    <div class="col-5 row d-flex flex-column justify-content-around">
                                        <h2>{{ $product->name }}</h2>
                                        <div class="d-flex gap-2">
                                            <a href="/admin/edit/{{ $product->id }}" class="btn btn-primary">EDIT</a>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteProductModal" 
                                                product-id="{{ $product->id }}" product-name="{{ $product->name }}">DELETE</button>
                                        </div>
                                    </div>

                                    <div class="col-7 text-end">
                                        <img class="border border-black border-opacity-50 rounded" alt=""
                                            @if(count($product->images)) src="{{asset('storage/' . $product->images[0]->url)}}" @else src="/pictures/unavailable-image.jpg" @endif>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-center mt-4">
                        {{ $products->links('layouts.partials.paginator') }}
                    </div>
                </div>

            </div>
        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>

        <script>
            const deleteBtn=document.getElementById('confirmDeleteBtn');
            const deleteForm=document.getElementById('deleteForm');
            const deleteModal=document.getElementById('deleteProductModal');
            const showProduct=document.getElementById('showProduct');
            let productId=null;
            let productName=null;

            deleteModal.addEventListener('show.bs.modal', (ev)=>{
                productId=ev.relatedTarget.getAttribute('product-id');
                productName=ev.relatedTarget.getAttribute('product-name');
                showProduct.innerHTML=productId+' - '+productName;
            });

            deleteBtn.addEventListener('click', ()=>{
                deleteForm.action="/products/"+productId;
                deleteForm.submit();
            });
        </script>
    </main>
@endsection