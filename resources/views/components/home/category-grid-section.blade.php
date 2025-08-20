@props([
    'categories' => [
        [
            'id' => 'starter-kit',
            'name' => "Starter Kit",
            'image' => '/assets/Section.png',
            'alt' => 'Starter Kit',
        ],
        [
            'id' => 'freebase-liquid',
            'name' => "Freebase Liquid",
            'image' => '/assets/Section2.png',
            'alt' => 'Freebase Liquid',
        ],
        [
            'id' => 'saltnic-liquid',
            'name' => "Saltnic Liquid",
            'image' => '/assets/Section3.png',
            'alt' => 'Saltnic Liquid',
        ],
        [
            'id' => 'official-merchandise',
            'name' => "Official Merch",
            'image' => '/assets/Section4.png',
            'alt' => 'Official Merchandise',
        ],
    ],
    'onCategoryClick' => null,
])

<div class="mx-4 mb-6 mt-40 sm:mt-24 md:mt-24 lg:mt-24">
    <div class="grid grid-cols-4 gap-2 sm:gap-3 md:gap-4">
        @foreach ($categories as $category)
            <button @if ($onCategoryClick) onclick="{{ $onCategoryClick }}('{{ $category['id'] }}')" @endif
                class="text-center bg-white rounded-lg shadow-lg p-2 sm:p-3 md:p-4 hover:shadow-xl transition-shadow">
                <div
                    class="w-12 h-12 sm:w-16 sm:h-16 md:w-20 md:h-20 mx-auto mb-2 rounded-full bg-brand flex items-center justify-center relative overflow-hidden">
                    <img src="{{ asset($category['image']) }}" alt="{{ $category['alt'] }}"
                        class="object-cover w-8 h-8 sm:w-12 sm:h-12 md:w-16 md:h-16">
                </div>
                <p class="text-xs sm:text-sm font-bold text-gray-700 whitespace-pre-line">
                    {!! nl2br(e($category['name'])) !!}
                </p>
            </button>
        @endforeach
    </div>
</div>
