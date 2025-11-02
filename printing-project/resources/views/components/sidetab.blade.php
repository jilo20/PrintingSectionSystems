<div 
    x-data="{ open: false }" 
    class="fixed top-0 left-0 h-screen bg-[#F4B629] shadow-lg flex flex-col transition-all duration-300"
    :class="open ? 'w-64' : 'w-16'"
>
    <!-- Toggle button -->
    <button @click="open = !open" class="p-2 z-50 relative">
        <img src="{{ asset('images/menu-burger.png') }}" alt="Menu" class="h-2 w-2">
    </button>

    <!-- Profile -->
    <div class="flex flex-col items-center mt-8 px-2 text-center">
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="rounded-full w-12 h-12 border-2 border-white">
        <div 
            class="mt-2 text-sm font-bold text-green-900 truncate transition-all duration-300"
            x-show="open"
        >
            USERNAME
        </div>
        <div 
            class="text-xs text-gray-800 transition-all duration-300" 
            x-show="open"
        >
            username@email.com
        </div>
    </div>
    <!-- Menu -->
    <div class="flex-1 px-2">
        <div class="bg-green-900 text-white text-center py-2 rounded-md mb-2 font-bold text-sm">Menu</div>
        <ul class="flex flex-col space-y-3 text-green-900 list-none">
            <li class="flex items-center">
                <i class="fa-solid fa-house w-5"></i>
                <a href="#" class="block ml-2 text-sm font-medium hover:text-green-700 transition-colors cursor-pointer">
                    <span x-show="open">Dashboard</span>
                </a>
            </li>
            <li class="flex items-center">
                <i class="fa-solid fa-briefcase w-5"></i>
                <a href="#" class="block ml-2 text-sm font-medium hover:text-green-700 transition-colors cursor-pointer">
                    <span x-show="open">Request Job</span>
                </a>
            </li>
            <li class="flex items-center">
                <i class="fa-solid fa-calculator w-5"></i>
                <a href="#" class="block ml-2 text-sm font-medium hover:text-green-700 transition-colors cursor-pointer">
                    <span x-show="open">Accounts</span>
                </a>
            </li>
            <li class="flex items-center">
                <i class="fa-solid fa-envelope w-5"></i>
                <a href="#" class="block ml-2 text-sm font-medium hover:text-green-700 transition-colors cursor-pointer">
                    <span x-show="open">Messaging</span>
                </a>
            </li>
            <li class="flex items-center">
                <i class="fa-solid fa-gear w-5"></i>
                <a href="#" class="block ml-2 text-sm font-medium hover:text-green-700 transition-colors cursor-pointer">
                    <span x-show="open">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- Include Alpine once globally in your main layout -->
<script src="//unpkg.com/alpinejs" defer></script>
