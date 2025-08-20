<footer class="bg-white border-t sticky bottom-0 p-4 z-2">
    <div class="flex justify-around">
        <button class="flex flex-col items-center space-y-1 relative transition-colors text-brand focus:outline-none">
            <div class="relative">
                <i data-feather="home" class="w-6 h-6"></i>
            </div>
            <span class="text-xs">Home</span>
        </button>
        <button class="flex flex-col items-center space-y-1 relative transition-colors text-gray-600 focus:outline-none">
            <div class="relative">
                <i data-feather="shopping-bag" class="w-6 h-6"></i>
            </div>
            <span class="text-xs">Shop</span>
        </button>
        <button
            class="flex flex-col items-center space-y-1 relative transition-colors text-gray-600 focus:outline-none">
            <div class="relative">
                <i data-feather="percent" class="w-6 h-6"></i>
                <span
                    class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center p-0">3</span>
            </div>
            <span class="text-xs">Promo</span>
        </button>
        <button
            class="flex flex-col items-center space-y-1 relative transition-colors text-gray-600 focus:outline-none">
            <div class="relative">
                <i data-feather="user" class="w-6 h-6"></i>
            </div>
            <span class="text-xs">Profile</span>
        </button>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex flex-col items-center space-y-1 relative transition-colors text-gray-600 focus:outline-none">
                <div class="relative">
                    <i data-feather="log-out" class="w-6 h-6"></i>
                </div>
                <span class="text-xs">Logout</span>
            </button>
        </form>
    </div>
</footer>
