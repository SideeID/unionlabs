@props([
    'title' => 'Lihat Semua',
    'products' => [
        [
            'id' => '1',
            'name' => 'Produk 1',
            'image' => '/assets/Product.png',
            'price' => 75000,
            'rating' => 5.0,
            'sold' => 500,
            'isNew' => true,
        ],
        [
            'id' => '2',
            'name' => 'Produk 2',
            'image' => '/assets/Product.png',
            'price' => 75000,
            'rating' => 5.0,
            'sold' => 500,
            'isNew' => true,
        ],
        [
            'id' => '3',
            'name' => 'Produk 3',
            'image' => '/assets/Product.png',
            'price' => 75000,
            'rating' => 5.0,
            'sold' => 500,
            'isNew' => false,
        ],
        [
            'id' => '4',
            'name' => 'Produk 4',
            'image' => '/assets/Product.png',
            'price' => 75000,
            'rating' => 5.0,
            'sold' => 500,
            'isNew' => false,
        ],
        [
            'id' => '5',
            'name' => 'Produk 5',
            'image' => '/assets/Product.png',
            'price' => 75000,
            'rating' => 5.0,
            'sold' => 500,
            'isNew' => true,
        ],
        [
            'id' => '6',
            'name' => 'Produk 6',
            'image' => '/assets/Product.png',
            'price' => 75000,
            'rating' => 5.0,
            'sold' => 500,
            'isNew' => false,
        ],
    ],
])

<section class="px-4 mb-6">
    <div class="flex items-center justify-between mb-4">
        <div class="text-start font-bold text-gray-700">{{ $title }}</div>
        <a href="#" class="text-sm text-brand hover:underline">
            <i data-feather="chevron-right" class="w-4 h-4"></i>
        </a>
    </div>

    <div class="grid grid-cols-2 gap-4">
        @foreach ($products as $product)
            <div class="bg-white rounded-xl border shadow-sm cursor-pointer hover:shadow-md transition-shadow">
                <div class="p-3">
                    <div class="relative mb-2">
                        <div
                            class="w-full h-24 bg-gray-200 rounded flex items-center justify-center relative overflow-hidden">
                            @if (!empty($product['image']))
                                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                                    class="object-contain w-full h-full">
                            @else
                                <i data-feather="image" class="w-8 h-8 text-gray-400"></i>
                            @endif
                        </div>

                        @if (!empty($product['isNew']) && $product['isNew'])
                            <div
                                class="absolute top-1 right-1 bg-brand text-white text-xs rounded-full w-10 h-10 flex items-center justify-center">
                                Baru!
                            </div>
                        @endif
                    </div>

                    <p class="text-sm font-semibold mb-1">{{ $product['name'] }}</p>
                    <div
                        class="flex flex-col md:flex-row md:items-center md:justify-between text-xs space-y-1 md:space-y-0">
                        <span class="font-bold text-green-600">
                            {{ 'Rp ' . number_format($product['price'], 0, ',', '.') }}
                        </span>
                        <div class="flex items-center space-x-1">
                            <i data-feather="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                            <span class="text-gray-600">{{ $product['rating'] }}</span>
                            <span class="text-gray-500">• {{ $product['sold'] }} terjual</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
