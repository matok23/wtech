<nav class="left-sidebar container w100">
    @php
        $categoryNames = [
            [
                'category' => 'Hats',
                'slug' => 'hats',
                'subcategories' => [
                    ['name' => 'Bucket hats', 'slug' => 'bucket-hats'],
                    ['name' => 'Caps', 'slug' => 'caps'],
                    ['name' => 'Fedoras', 'slug' => 'fedoras'],
                ],
            ],
            [
                'category' => 'Tops',
                'slug' => 'tops',
                'subcategories' => [
                    ['name' => 'Shirts', 'slug' => 'shirts'],
                    ['name' => 'Sweatshirt', 'slug' => 'sweatshirt'],
                    ['name' => 'Gym', 'slug' => 'gym-tops'],
                ],
            ],
            [
                'category' => 'Pants',
                'slug' => 'pants',
                'subcategories' => [
                    ['name' => 'Shorts', 'slug' => 'shorts'],
                    ['name' => 'Sweatpants', 'slug' => 'sweatpants'],
                ],
            ],
            [
                'category' => 'Shoes',
                'slug' => 'shoes',
                'subcategories' => [
                    ['name' => 'Sneakers', 'slug' => 'sneakers'],
                    ['name' => 'Sandals', 'slug' => 'sandals'],
                ],
            ],
            [
                'category' => 'Accessories',
                'slug' => 'accessories',
                'subcategories' => [
                    ['name' => 'Bracelets', 'slug' => 'bracelets'],
                    ['name' => 'Necklaces', 'slug' => 'necklaces'],
                ],
            ],
    
        ];
    @endphp

    @foreach ( $categoryNames as $categorySingle)
        <div class="categoryDropdown">
            <button class="categoryBtn">{{ $categorySingle['category'] }}</button>
            <div class="categoryContent">
                <a href="/browsing/{{ $category }}?subcategory={{ $categorySingle['slug'] }}">All</a>
                @foreach ( $categorySingle['subcategories'] as $subcategory )
                    <a href="/browsing/{{ $category }}?subcategory={{ $subcategory['slug'] }}">{{ $subcategory['name'] }}</a>
                @endforeach
            </div>
        </div>
    @endforeach
</nav>

<script>
    document.querySelectorAll('.categoryBtn').forEach((node)=>{
        node.addEventListener('click',()=>{
            node.closest('.categoryDropdown').querySelector('.categoryContent').classList.toggle('categoryVisible')
        })
    })
</script>