@props([
    'title' => 'Spesial Hari Ini',
    'products' => [
        [ 'name' => 'Starter Kit', 'image' => '/assets/SpecialProduct.png', 'discountPrice' => 100000, 'originalPrice' => 150000 ],
        [ 'name' => 'Freebase Liquid', 'image' => '/assets/SpecialProduct.png', 'discountPrice' => 80000, 'originalPrice' => 120000 ],
        [ 'name' => 'Saltnic Liquid', 'image' => '/assets/SpecialProduct.png', 'discountPrice' => 90000, 'originalPrice' => 130000 ],
        [ 'name' => 'Official Merchandise', 'image' => '/assets/SpecialProduct.png', 'discountPrice' => 50000, 'originalPrice' => 70000 ],
        [ 'name' => 'Limited Edition', 'image' => '/assets/SpecialProduct.png', 'discountPrice' => 120000, 'originalPrice' => 180000 ],
        [ 'name' => 'New Arrival', 'image' => '/assets/SpecialProduct.png', 'discountPrice' => 110000, 'originalPrice' => 160000 ],
    ],
    'formatPrice' => fn($price) => number_format($price, 0, ',', '.'),
])

@php($carouselId = 'embla-'.uniqid())

<section class="px-4 mb-6" id="section-{{ $carouselId }}">
    <div class="flex items-center justify-between mb-4">
        <div class="text-start font-bold text-gray-700">{{ $title }}</div>
        <a href="#" class="text-sm text-brand hover:underline flex items-center gap-1">
            <span>Lihat semua</span>
            <i data-feather="chevron-right" class="w-4 h-4"></i>
        </a>
    </div>

    <div class="relative" id="{{ $carouselId }}">
        <div class="embla">
            <div class="embla__viewport overflow-hidden">
                <div class="embla__container flex gap-4">
                    @foreach($products as $product)
                        <div class="embla__slide flex-[0_0_auto] w-[150px]">
                            <div class="bg-white rounded-xl shadow-sm cursor-pointer hover:shadow-md transition-shadow p-3 h-full">
                                <div class="relative mb-2">
                                    <div class="w-full h-20 bg-gray-200 rounded flex items-center justify-center overflow-hidden">
                                        @if($product['image'])
                                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="object-contain w-full h-full">
                                        @else
                                            <i data-feather="image" class="w-8 h-8 text-gray-400"></i>
                                        @endif
                                    </div>
                                    <span class="absolute top-1 left-1 bg-red-500 text-white text-xs px-2 py-1 rounded">Promo</span>
                                </div>
                                <p class="text-sm font-semibold line-clamp-2 min-h-[32px]">{{ $product['name'] }}</p>
                                <div class="flex flex-col">
                                    <span class="text-sm font-bold text-red-500">{{ $formatPrice($product['discountPrice']) }}</span>
                                    <span class="text-xs text-gray-500 line-through">{{ $formatPrice($product['originalPrice']) }}</span>
                                </div>
                                <div class="flex items-center gap-1 mt-1">
                                    <i data-feather="star" class="w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                                    <span class="text-xs text-gray-600">5.0</span>
                                    <span class="text-xs text-gray-400">•</span>
                                    <span class="text-xs text-gray-600">500+ Terjual</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Navigation -->
        <button type="button" class="embla__prev absolute -left-2 top-1/2 -translate-y-1/2 bg-white border border-gray-200 w-8 h-8 rounded-full shadow flex items-center justify-center disabled:opacity-30" aria-label="Sebelumnya">
            <i data-feather="chevron-left" class="w-4 h-4"></i>
        </button>
        <button type="button" class="embla__next absolute -right-2 top-1/2 -translate-y-1/2 bg-white border border-gray-200 w-8 h-8 rounded-full shadow flex items-center justify-center disabled:opacity-30" aria-label="Berikutnya">
            <i data-feather="chevron-right" class="w-4 h-4"></i>
        </button>
        <div class="embla__dots flex justify-center gap-2 mt-4"></div>
    </div>
</section>

<script>
    (function(){
        const rootId = @json($carouselId);
        function initEmbla(){
            if(!window.EmblaCarousel) return;
            const root = document.getElementById(rootId);
            if(!root) return;
            const viewport = root.querySelector('.embla__viewport');
            const prevBtn = root.querySelector('.embla__prev');
            const nextBtn = root.querySelector('.embla__next');
            const dotsRoot = root.querySelector('.embla__dots');
            if(!viewport) return;

            const embla = EmblaCarousel(viewport, {
                loop: false,
                align: 'start',
                containScroll: 'trimSnaps',
                dragFree: false,
                slidesToScroll: 1,
            });

            const addDots = () => {
                dotsRoot.innerHTML = '';
                embla.scrollSnapList().forEach((_, idx) => {
                    const btn = document.createElement('button');
                    btn.type = 'button';
                    btn.className = 'embla__dot w-2.5 h-2.5 rounded-full bg-gray-300 transition-colors';
                    btn.addEventListener('click', () => embla.scrollTo(idx));
                    dotsRoot.appendChild(btn);
                });
            };

            const toggleButtons = () => {
                if(prevBtn) prevBtn.disabled = !embla.canScrollPrev();
                if(nextBtn) nextBtn.disabled = !embla.canScrollNext();
            };

            const setActiveDot = () => {
                const selected = embla.selectedScrollSnap();
                dotsRoot.querySelectorAll('.embla__dot').forEach((dot, idx) => {
                    if(idx === selected){
                        dot.classList.add('bg-brand','scale-110');
                        dot.classList.remove('bg-gray-300');
                    } else {
                        dot.classList.remove('bg-brand','scale-110');
                        dot.classList.add('bg-gray-300');
                    }
                });
            };

            addDots();
            setActiveDot();
            toggleButtons();

            embla.on('select', () => { setActiveDot(); toggleButtons(); });
            embla.on('reInit', () => { addDots(); setActiveDot(); toggleButtons(); });

            if(prevBtn) prevBtn.addEventListener('click', () => embla.scrollPrev());
            if(nextBtn) nextBtn.addEventListener('click', () => embla.scrollNext());

            if(window.feather){ feather.replace(); }
        }

        if(document.readyState === 'loading'){
            document.addEventListener('DOMContentLoaded', initEmbla);
        } else {
            initEmbla();
        }
    })();
</script>
