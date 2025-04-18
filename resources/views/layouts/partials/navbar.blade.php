<nav class="left-sidebar">
    @php
        $categoryNames = [
            [
                'category' => 'Hats',
                'slug' => 'hats',
                'subcategories' => [
                    ['name' => 'Bucket hats', 'slug' => 'bucket-hats'],
                    ['name' => 'Caps', 'slug' => 'caps'],
                    ['name' => 'Durags', 'slug' => 'durags'],
                    ['name' => 'Other', 'slug' => 'other-hats'],
                ],
            ],
            [
                'category' => 'Tops',
                'slug' => 'tops',
                'subcategories' => [
                    ['name' => 'T-Shirts', 'slug' => 't-shirts'],
                    ['name' => 'Long sleeve', 'slug' => 'long-sleeve'],
                    ['name' => 'Gym', 'slug' => 'gym-tops'],
                    ['name' => 'Other', 'slug' => 'other-tops'],
                ],
            ],
            [
                'category' => 'Pants',
                'slug' => 'pants',
                'subcategories' => [
                    ['name' => 'Shorts', 'slug' => 'shorts'],
                    ['name' => 'Jeans', 'slug' => 'jeans'],
                    ['name' => 'Other', 'slug' => 'other-pants'],
                ],
            ],
            [
                'category' => 'Shoes',
                'slug' => 'shoes',
                'subcategories' => [
                    ['name' => 'Running', 'slug' => 'running'],
                    ['name' => 'Indoor', 'slug' => 'indoor'],
                    ['name' => 'Leather', 'slug' => 'leather'],
                    ['name' => 'Flip-flops', 'slug' => 'flip-flops'],
                    ['name' => 'Hiking', 'slug' => 'hiking'],
                    ['name' => 'Other', 'slug' => 'other-shoes'],
                ],
            ],
            [
                'category' => 'Accessories',
                'slug' => 'accessories',
                'subcategories' => [
                    ['name' => 'Bracelets', 'slug' => 'bracelets'],
                    ['name' => 'Necklaces', 'slug' => 'necklaces'],
                    ['name' => 'Galaxy gas', 'slug' => 'galaxy-gas'],
                    ['name' => 'Wallets', 'slug' => 'wallets'],
                    ['name' => 'Other', 'slug' => 'other-accessories'],
                ],
            ],
            [
                'category' => 'Other',
                'slug' => 'other',
                'subcategories' => [
                    ['name' => 'idk yet', 'slug' => 'idk-yet'],
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