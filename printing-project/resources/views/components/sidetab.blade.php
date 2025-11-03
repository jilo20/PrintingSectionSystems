<!-- Burger Button -->
<img 
    id="burgerBtn" 
    src="{{ asset('images/menu-burger.png') }}" 
    alt="Menu" 
    class="h-8 w-8 cursor-pointer z-[100]">

<!-- Dim Background -->
<div 
    id="backdrop" 
    class="fixed inset-0 bg-black/40 opacity-0 pointer-events-none transition-opacity duration-300 z-40"
></div>

<!-- Sidebar / Overlay -->
<div 
    id="overlay" 
    class="fixed top-0 left-0 h-full w-[20rem] bg-secondary opacity-0 scale-x-0 origin-left transition-all duration-500 pointer-events-none z-50">
    <div class="flex flex-col items-center mt-24 gap-4">
        <div>
            <img class=" w-24 h-24 rounded-full obj-cover" src="{{ asset('images/piolo.png') }}" alt="">
        </div>
        <div class="flex flex-col items-center text-primary">
            <h1 class="text-xl font-bold uppercase">{{ Auth::user()->fname }}</h1>
            <p class="text-gray-800">{{ Auth::user()->email }}</p>
        </div>

        <div class="bg-primary text-gray-100 px-32 py-2 rounded-md mt-6">
            Menu
        </div>

        <div class="flex flex-col text-primary font-semibold space-y-0 self-start pl-10">
            <a class="block py-4 hover:px-10 border-b-0 border-transparent hover:border-b-2 hover:border-primary transition-all duration-[.4s]" href="/readshome">
                Dashboard
            </a>
            <a class="block py-4 hover:px-10 border-b-0 border-transparent hover:border-b-2 hover:border-primary transition-all duration-[.4s]" href="/requests">
                Request
            </a>
            <a class="block py-4 hover:px-10 border-b-0 border-transparent hover:border-b-2 hover:border-primary transition-all duration-[.4s]" href="#">
                Messaging
            </a>
            <a class="block py-4 hover:px-10 border-b-0 border-transparent hover:border-b-2 hover:border-primary transition-all duration-[.4s]" href="#">
                About
            </a>
        </div>

        
    </div>
</div>

<script>
    const burger = document.getElementById('burgerBtn');
    const overlay = document.getElementById('overlay');
    const backdrop = document.getElementById('backdrop');

    function toggleMenu() {
        overlay.classList.toggle('opacity-0');
        overlay.classList.toggle('scale-x-0');
        overlay.classList.toggle('pointer-events-none');
        backdrop.classList.toggle('opacity-0');
        backdrop.classList.toggle('pointer-events-none');
    }

    burger.addEventListener('click', toggleMenu);
    backdrop.addEventListener('click', toggleMenu);
</script>