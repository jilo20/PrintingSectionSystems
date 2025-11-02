<div 
    x-data="{ open: false }" 
    class="fixed top-0 left-0 h-screen bg-[#F4B629] shadow-lg flex flex-col transition-all duration-300"
    :class="open ? 'w-64' : 'w-16'"
>
    <!-- Toggle Button -->
    <button @click="open = !open" class="p-3 z-50 relative self-end">
        <img src="{{ asset('images/menu-burger.png') }}" alt="Menu" 
             class="transition-all duration-300" 
             :class="open ? 'h-6 w-6' : 'h-5 w-5'">
    </button>

    <!-- Profile Section -->
    <div x-show="open" x-transition class="flex flex-col items-center mt-6 px-2 text-center">
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile" 
             class="rounded-full w-16 h-16 border-2 border-white mb-2">
        <div class="text-sm font-bold text-green-900">USERNAME</div>
        <div class="text-xs text-gray-800">username@email.com</div>
    </div>

    <!-- Menu Section -->
    <div class="flex-1 px-2 mt-6">
        <!-- Menu Header -->
        <div x-show="open" x-transition 
             class="bg-green-900 text-white text-center py-2 rounded-md mb-2 font-bold text-sm">
            Menu
        </div>

        <!-- Menu Items -->
        <ul class="flex flex-col space-y-3 text-green-900 list-none">
            <li class="flex items-center">
                <i class="fa-solid fa-house w-5"></i>
                <span x-show="open" x-transition class="ml-2 text-sm font-medium">Dashboard</span>
            </li>
            <li class="flex items-center">
                <i class="fa-solid fa-briefcase w-5"></i>
                <span x-show="open" x-transition class="ml-2 text-sm font-medium">Request Job</span>
            </li>
            <li class="flex items-center">
                <i class="fa-solid fa-calculator w-5"></i>
                <span x-show="open" x-transition class="ml-2 text-sm font-medium">Accounts</span>
            </li>
            <li class="flex items-center">
                <i class="fa-solid fa-envelope w-5"></i>
                <span x-show="open" x-transition class="ml-2 text-sm font-medium">Messaging</span>
            </li>
            <li class="flex items-center">
                <i class="fa-solid fa-gear w-5"></i>
                <span x-show="open" x-transition class="ml-2 text-sm font-medium">Settings</span>
            </li>
        </ul>
    </div>
</div>

<!-- Include Alpine.js globally (once in your main layout) -->
<script src="//unpkg.com/alpinejs" defer></script>
