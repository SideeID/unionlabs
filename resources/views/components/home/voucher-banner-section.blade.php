<div class="space-y-4 sm:space-y-6 md:space-y-8 mb-6">
    <div class="mx-2 sm:mx-4 mb-4 sm:mb-6">
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg flex border-2 sm:border-4 md:border-5 border-brand">
            <div class="bg-brand p-3 sm:p-4 md:p-6 min-w-[120px] sm:min-w-[150px] md:min-w-[180px] flex items-center justify-center relative"
                style="clip-path: polygon(0 0, 90% 0, 75% 100%, 0 100%)">
                <img src="{{ $voucher1Image ?? '/assets/Voucher2.png' }}"
                    alt="Voucher" class="w-12 h-12 sm:w-16 sm:h-16 object-contain">
            </div>

            <div class="bg-white flex-1 sm:p-3 md:p-4 pl-4 sm:pl-6 md:pl-8 flex items-center">
                <div class="grid grid-cols-3 items-center h-full w-full gap-2 sm:gap-4">
                    <div class="col-span-2 flex flex-col justify-center">
                        <p class="font-bold text-sm sm:text-base md:text-lg text-gray-900 leading-tight">
                            {{ $voucher1Title ?? 'Voucher buy 1 get 1 special' }}
                        </p>
                        <p class="font-bold italic text-xs sm:text-sm text-gray-700">
                            {{ $voucher1Subtitle ?? 'UNIONLABS WEBSITE USER.' }}
                        </p>
                    </div>
                    <div class="flex justify-end items-center">
                        <button
                            class="bg-brand hover:bg-brand/90 text-white font-semibold px-3 py-1.5 sm:px-4 sm:py-2 md:px-6 md:py-2 rounded-lg sm:rounded-xl text-xs sm:text-sm">
                            {{ $voucher1Button ?? 'KLAIM' }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-2 sm:mx-4 mb-4 sm:mb-6 md:mb-8">
        <div class="rounded-xl sm:rounded-2xl overflow-hidden border-2 border-gray-200 bg-white">
            <div class="p-3 sm:p-4 md:p-6">
                <div class="flex items-center justify-between mb-3 sm:mb-4 gap-2 sm:gap-3 md:gap-4">
                    <div class="flex-1">
                        <h3 class="text-sm sm:text-lg md:text-xl lg:text-2xl font-bold text-green-600 mb-1 sm:mb-2">
                            {{ $voucher2Title1 ?? 'Mau Voucher' }}
                        </h3>
                        <h3 class="text-sm sm:text-lg md:text-xl lg:text-2xl font-bold text-green-600 mb-1 sm:mb-2">
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
                    class="w-full bg-brand hover:bg-brand/90 text-white font-semibold py-3 sm:py-4 md:py-5 lg:py-5 rounded-full text-sm sm:text-base md:text-lg">
                    {{ $voucher2Button ?? 'CLAIM SEKARANG' }}
                </button>
            </div>
        </div>
    </div>
</div>
