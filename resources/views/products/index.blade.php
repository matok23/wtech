@extends('layouts.app')

@section('content')

    <main class="d-flex flex-column min-vh-100">
        <header>
            @include('layouts.partials.header')
        </header>

        <section class="container flex-fill">
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf

                <label for="images">Product Images</label>
                <input class="form-control" type="file" name="images[]" id="images" multiple >

                <div id="preview-container" class="d-flex gap-2"></div>

                <button type="button">Upload</button>
            </form>

            <script>
                const input = document.getElementById('images');
                const previewContainer = document.getElementById('preview-container');
                let selectedFiles = [];

                input.addEventListener('change', () => {
                    previewContainer.innerHTML = '';
                    selectedFiles = selectedFiles.concat(Array.from(input.files));

                    selectedFiles.forEach((file, index) => {
                        const reader = new FileReader();
                        reader.onload = e => {
                            const wrapper = document.createElement('div');
                            wrapper.style.position = 'relative';
                            wrapper.style.width = '100px';

                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.alt = file.name;
                            img.style.width = '100px';
                            img.style.height = '100px';
                            img.style.objectFit = 'cover';
                            img.style.borderRadius = '6px';

                            const name = document.createElement('div');
                            name.textContent = file.name;
                            name.classList.add('')
                            // name.style.fontSize = '12px';
                            // name.style.textAlign = 'center';
                            // name.style.marginTop = '5px';

                            const removeBtn = document.createElement('button');
                            removeBtn.type = 'button';
                            removeBtn.classList.add('position-absolute', 'top-0', 'end-0');
                            removeBtn.style.width = '20px';
                            removeBtn.style.height = '20px';

                            removeBtn.addEventListener('click', () => {
                                selectedFiles.splice(index, 1);
                                updateInputFiles();
                                wrapper.remove();
                            });

                            wrapper.appendChild(img);
                            wrapper.appendChild(removeBtn);
                            wrapper.appendChild(name);
                            previewContainer.appendChild(wrapper);
                        };
                        reader.readAsDataURL(file);
                    });
                });

                function updateInputFiles() {
                    const dataTransfer = new DataTransfer();
                    selectedFiles.forEach(file => dataTransfer.items.add(file));
                    input.files = dataTransfer.files;
                }
            </script>


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