{{-- <div class="relative">
    <button>
        <img src="{{ asset('images/menu-burger.png') }}" alt="" class="h-8 w-8">
    </button>
</div> --}}

<!-- Alpine.js (add once in your layout, e.g., app.blade.php) -->
<script src="//unpkg.com/alpinejs" defer></script>

<div x-data="{ open: false }" class="relative" @click.outside="open = false">

    <!-- Burger Button -->
    <button @click="open = !open" class="p-2 z-50 relative">
        <img src="{{ asset('images/menu-burger.png') }}" alt="Menu" class="h-8 w-8">
    </button>

    <!-- Overlay (dims background when open) -->
    <div 
        x-show="open" 
        x-transition.opacity 
        @click="open = false"
        class="fixed inset-0 bg-black/40 z-40"
        x-cloak>
    </div>

    <!-- Sidebar -->
    <div
        x-show="open"
        x-transition:enter="transition transform ease-out duration-500"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition transform ease-in duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="fixed top-0 left-0 h-screen w-64 bg-secondary shadow-lg flex flex-col p-4 z-50"
        x-cloak
    >
        <x-mainbutton class="mb-4">Dashboard</x-mainbutton>
        <x-mainbutton class="mb-4">Requests</x-mainbutton>
        <x-mainbutton class="mb-4">Settings</x-mainbutton>
        <x-mainbutton @click="open = false">Close</x-mainbutton>
    </div>
</div>
