<div class="mx-4">
    <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
        <div class="flex items-center justify-between px-3 py-2 sm:px-4 sm:py-3 bg-white border-b border-black/5">
            <div class="flex items-center">
                <div class="flex items-center gap-2 px-3 py-2 rounded-xl shadow-sm border border-black/5 bg-gradient-to-bl from-[#F6E8C3] to-white">
                    <img src="/assets/icon-star.png" alt="Star" class="w-5 h-5 sm:w-6 sm:h-6 object-contain">
                    <span class="text-sm sm:text-base font-semibold text-[#997B27]">Poin kamu</span>
                </div>
            </div>
            <div class="flex items-end gap-1 text-gray-900">
                <span class="text-lg sm:text-xl font-extrabold leading-none">{{ $points ?? 100 }}</span>
                <span class="text-sm sm:text-base font-medium leading-none text-gray-700">pts</span>
            </div>
        </div>

        <div class="bg-gray-100 p-2">
            <div class="bg-white flex items-center justify-between rounded-xl px-3 py-2 sm:px-4 sm:py-3">
                <div class="flex-1">
                    <h3 class="font-semibold text-lg text-gray-900">
                        Ruko Mulyosari Surabaya
                    </h3>
                    <p class="text-gray-600 text-sm">
                        Ruko Mulyosari Surabaya, Jl Mulyosari No 76G Kec....
                    </p>
                </div>
                <div class="ml-4">
                    <button
                        class="w-12 h-12 bg-white rounded-full flex items-center justify-center border-4 border-brand hover:bg-purple-200 transition-colors"
                        onclick="handleLocationClick()">
                        <i data-feather="map-pin" class="w-6 h-6 text-red-600"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3 px-2">
            <div class="flex items-center gap-2 text-gray-500">
            <span class="text-sm font-bold">Melayani</span>
            <span class="w-3 h-3 sm:w-4 sm:h-4 md:w-4 md:h-4 rounded-full border-2 sm:border-4 border-green-500 inline-block"></span>
            <span class="text-sm font-bold text-black">Delivery 8/5</span>
            <div class="flex-1 h-px bg-gray-300 ml-2"></div>
        </div>
    </div>

</div>
