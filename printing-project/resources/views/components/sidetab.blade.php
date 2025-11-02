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
    class="fixed top-0 left-0 h-full w-[20rem] bg-secondary opacity-0 scale-x-0 origin-left transition-all duration-500 pointer-events-none z-50"
>   
    {{-- profile --}}
    <div>
        <img src="{{ asset('images/fblogo.png') }}" alt="">
    </div>

    {{-- tabs --}}
    <div>
        <link-button>Dashboard</link-button>
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
