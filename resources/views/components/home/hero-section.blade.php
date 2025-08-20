<div class="relative">
    <div class="embla embla-hero relative aspect-[16/9] overflow-hidden">
        <div class="embla__container flex h-full">
            <div class="embla__slide flex-[0_0_100%] relative h-full">
                <img src="/assets/background.png" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-transparent pointer-events-none"></div>
            </div>
            <div class="embla__slide flex-[0_0_100%] relative h-full">
                <img src="/assets/background1.png" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-transparent pointer-events-none"></div>
            </div>
            <div class="embla__slide flex-[0_0_100%] relative h-full">
                <img src="/assets/background.png" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-transparent pointer-events-none"></div>
            </div>
        </div>

        <div class="absolute inset-0 flex flex-col justify-start items-center text-center pt-10 px-6">
            <div class="flex items-center gap-0 w-full max-w-xl">
                <div class="relative flex-1">
                    <i data-feather="search" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 w-5 h-5 z-10"></i>
                    <input
                        type="text"
                        placeholder="{{ $searchPlaceholder ?? 'Makna V4' }}"
                        class="pl-10 pr-0 bg-white/50 backdrop-blur-sm border-gray-200 rounded-l-lg rounded-r-none h-12 border-r-0 w-full focus:outline-none"
                    >
                </div>
                <div class="relative">
                    <button
                        class="bg-brand hover:bg-brand/90 rounded-l-none rounded-r-lg h-12 w-12 border-l-0 flex items-center justify-center"
                    >
                        <i data-feather="shopping-cart" class="w-5 h-5"></i>
                    </button>
                    @if(($cartCount ?? 25) > 0)
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full min-w-[24px] h-6 flex items-center justify-center text-xs">
                            {{ $cartCount ?? 25 }}
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const emblaNode = document.querySelector('.embla-hero')
    if (!emblaNode) return
    const emblaApi = EmblaCarousel(emblaNode, { loop: true })

    let autoplayInterval = setInterval(() => emblaApi.scrollNext(), 3000)
    emblaNode.addEventListener('mouseenter', () => clearInterval(autoplayInterval))
    emblaNode.addEventListener('mouseleave', () => {
        autoplayInterval = setInterval(() => emblaApi.scrollNext(), 3000)
    })
})
</script>
