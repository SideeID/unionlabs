<div class="space-y-4 sm:space-y-6 md:space-y-8 mb-6">
    <div class="mx-2 sm:mx-4 mb-4 sm:mb-6">
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg border-2 sm:border-4 md:border-5 border-brand">
            <div class="p-1 sm:p-2 md:p-2 flex items-center gap-3">
                <div class="flex-shrink-0 flex items-center justify-center">
                    <img src="{{ $voucher1Image ?? '/assets/voucher-icon.png' }}"
                        alt="Voucher" class="w-14 h-14 sm:w-18 sm:h-18 md:w-22 md:h-22 lg:w-24 lg:h-24 object-contain">
                </div>

                <div class="flex-1 text-center">
                    <p class="font-bold text-xl sm:text-base md:text-xl text-gray-900 leading-tight">
                        {{ $voucher1Title ?? 'Voucher buy 1 get 1 special' }}
                    </p>
                    <p class="font-bold italic text-xl sm:text-sm text-gray-700">
                        {{ $voucher1Subtitle ?? 'UNIONLABS WEBSITE USER.' }}
                    </p>
                </div>

                <div class="flex-shrink-0">
                    <button
                        class="bg-[#C70122] hover:bg-[#C70122]/90 text-white font-semibold w-10 h-10 sm:w-12 sm:h-12 md:w-14 md:h-14 rounded-xl flex items-center justify-center text-xs sm:text-sm md:text-sm"
                        aria-label="Klaim Voucher">
                        {{ $voucher1Button ?? 'KLAIM' }}
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-2 sm:mx-4 mb-4 sm:mb-6 md:mb-8">
        <div class="rounded-xl sm:rounded-2xl overflow-hidden border-2 border-gray-200 bg-white">
            <div class="p-3 sm:p-4 md:p-6">
                <div class="flex items-center justify-between mb-3 sm:mb-4 gap-2 sm:gap-3 md:gap-4">
                    <div class="flex-1">
                        <h3 class="text-sm sm:text-lg md:text-xl lg:text-2xl font-bold text-green-500 mb-1 sm:mb-2">
                            {{ $voucher2Title1 ?? 'Mau Voucher' }}
                        </h3>
                        <h3 class="text-sm sm:text-lg md:text-xl lg:text-2xl font-bold text-green-500 mb-1 sm:mb-2">
                            {{ $voucher2Title2 ?? 'Diskon 10RB?' }}
                        </h3>
                        <p class="text-xs sm:text-sm md:text-base text-gray-600">
                            {{ $voucher2Description ?? 'Gabung & Ambil Vouchernya Sekarang juga!' }}
                        </p>
                    </div>
                    <div class="flex justify-end">
                        <div class="relative">
                            <img src="{{ $voucher2Image ?? '/assets/Voucher.png' }}"
                                alt="Voucher"
                                class="w-12 h-12 sm:w-20 sm:h-20 md:w-28 md:h-28 lg:w-36 lg:h-36 object-contain">
                        </div>
                    </div>
                </div>

                <button
                    class="w-full bg-green-500 hover:bg-green-500/90 text-white font-semibold py-2 sm:py-3 md:py-4 rounded-full text-sm sm:text-base md:text-lg">
                    {{ $voucher2Button ?? 'CLAIM SEKARANG' }}
                </button>
            </div>
        </div>
    </div>
</div>
