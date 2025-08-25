<x-home-layout>
    <div class="relative">
        <x-home.hero-section
            search-placeholder="Cari produk vape..."
            :cart-count="12"
            :images="['/assets/Background.png','/assets/Background2.png']"
        />
        <div class="absolute left-1/2 -translate-x-1/2 top-[80%] w-full px-4">
            <x-home.location-section />
        </div>
    </div>
    <x-home.category-grid-section />
    <x-home.voucher-banner-section />
    <x-home.special-section />
    <x-home.official-merch-section />
    <x-home.product-section title="Produk Terbaru" />
    <x-home.product-section title="Produk Terlaris" />
    <x-home.promo-section />
    <x-home.chat-admin-section />

</x-home-layout>
