@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endpush

@section('content')
    <main class="d-flex flex-column min-vh-100">
        <header>
            <div class="headerContainer flex-column flex-sm-row gap-2" >
                <div class="dropdowns">
                    <a href="/admin" class="btn btn-primary">&larr; Return to dashboard</a>
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

        <section class="main-content flex-fill justify-content-center">
            
            <div class="container col-11 col-md-5 p-2">
                    <div class="row justify-content-center sticky-row">
                        <div class="col-11 col-xl-9 roundedContainer row p-2 d-flex flex-column justify-content-evenly align-items-center gap-2">
                            <h2>Edit product</h2>
                            
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('products.update', $product->id) }}" class="d-flex flex-column justify-content-evenly align-items-center gap-2">
                                @csrf
                                @method('PATCH')
                                <input type="text" name="name" class="form-control" placeholder="name" value="{{ $product->name }}">
                                <textarea name="description" class="form-control" placeholder="description">{{ $product->description }}</textarea>
                                <input type="number" name="price" class="form-control" placeholder="price" value="{{ $product->price }}" step="0.01">
                                <input type="text" name="color" class="form-control" placeholder="color" value="{{ $product->color }}">

                                <div class="d-flex justify-content-end align-items-center gap-2 w-100">
                                    <div class="">Brand:</div>
                                    <select name="manufacturer_id" class="w-100 form-select">
                                        @foreach($manufacturers as $manufacturer)
                                            <option value="{{ $manufacturer->id }}" @if ($product->manufacturer_id===$manufacturer->id) selected @endif>
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
                                                    @if(in_array($category->id, $product->categories->pluck('id')->toArray())) checked @endif>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success w-50">UPDATE</button>
                            </form>

                            <h2>Images</h2>

                            <form method="POST" action="{{ route('products.updateImages', $product->id) }}" enctype="multipart/form-data" class="d-flex flex-column justify-content-evenly align-items-center gap-2">
                                @csrf
                                @method('PUT')

                                <div class="d-flex flex-column justify-content-evenly align-items-center gap-2 w-100">
                                    
                                    @foreach ($product->images as $image)
                                        <div class="d-flex gap-2 w-100 justify-content-between align-items-center">
                                            <a target="_blank" href="{{ asset('storage/' . $image->url) }}" class="">{{ $image->url }}</a>
                                            <button type="button" class="btn btn-danger" image-id="{{ $image->id }}" name="deleteImgBtn">DELETE</button>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="d-flex w-100 gap-2">
                                    <input class="form-control w-50" type="file" multiple name="images[]" class="form-control" accept="image/*" value="{{ old('images[]') }}">
                                    <button type="submit" class="btn btn-success w-50">UPLOAD</button>
                                </div>
                            </form>

                            <h2>Stock</h2>

                            <form id="deleteForm" method="POST" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                            
                            <form method="POST" action="{{ route('products.updateStock', $product->id) }}" class="d-flex flex-column justify-content-evenly align-items-center gap-2">
                                @csrf
                                @method('PUT')

                                <div class="d-flex flex-column justify-content-evenly align-items-center gap-2 w-100" id="stockRows">
                                    
                                    @foreach ($product->stock as $stock)
                                        <div class="d-flex gap-2 w-100">
                                            <input type="text" value="{{ $stock->size }}" readonly placeholder="size" class="form-control flex-grow-1" name="sizes[]">
                                            <input type="number" step="1" value="{{ $stock->stock_left }}" placeholder="stock" class="form-control flex-grow-1" name="stocks[]">
                                            <button type="button" class="btn btn-danger" stock-id="{{ $stock->id }}" name="deleteBtn">DELETE</button>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="d-flex w-100 gap-2">
                                    <button type="button" class="btn btn-primary w-50" id="stockBtn">ADD</button>
                                    <button type="submit" class="btn btn-success w-50">UPDATE</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

        </section>

        <footer>
            @include('layouts.partials.footer')
        </footer>

        <script>
            const button=document.getElementById('stockBtn');
            const stockRows=document.getElementById('stockRows');
            const deleteForm=document.getElementById('deleteForm');

            button.addEventListener('click', ()=>{
                let newRow=document.createElement('div');
                newRow.classList.add('d-flex','gap-2', 'w-100');
                newRow.innerHTML=
                    '<input type="text" value="" placeholder="size" class="form-control flex-grow-1" name="sizes[]">'+
                    '<input type="number" step="1" value="" placeholder="stock" class="form-control flex-grow-1" name="stocks[]">'+
                    '<button type="button" class="btn btn-danger">DELETE</button>'
                stockRows.appendChild(newRow);
                newRow.querySelector('button').addEventListener('click',()=>{
                    newRow.remove();
                });
            });

            document.querySelectorAll('button[name="deleteBtn"]').forEach((btn)=>{
                btn.addEventListener('click', (ev)=>{
                    deleteForm.action= "/products/stock/" + ev.target.getAttribute('stock-id');
                    deleteForm.submit();
                });
            });

            document.querySelectorAll('button[name="deleteImgBtn"]').forEach((btn)=>{
                btn.addEventListener('click', (ev)=>{
                    deleteForm.action= "/products/images/" + ev.target.getAttribute('image-id');
                    deleteForm.submit();
                });
            });
        </script>
    </main>
@endsection