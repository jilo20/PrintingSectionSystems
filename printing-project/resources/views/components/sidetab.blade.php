@props([
    'selected' => 0
])


<div class="bg-primary z-50 w-[5em] h-full py-4 px-4 origin-left sidebar overflow-hidden transition-all duration-500 fixed">
    <div class="w-full flex relative cursor-pointer btn">
        <img 
            src="{{ asset('images/menu.png') }}" 
            alt="Menu" 
            class="h-10 w-10 transition-all duration-500">
    </div>

    <div id="disappear" class="opacity-0 transition-all duration-500">
        <div class="w-[24em] flex items-center justify-center flex-col mt-10 gap-4 origin-center">
            <div>
                <img src="{{ asset('images/piolo.png') }}" class="object-cover rounded-full h-32 w-32">
            </div>
            <div class="text-center">
                <p class="font-bold text-gray-100 text-center text-2xl uppercase">
                    {{ Auth::user()->fname  }} {{ Auth::user()->lname }}
                </p>
                <p class="text-gray-100 text-sm font-light">
                    {{ Auth::user()->email }}
                </p>
            </div>
        </div>

        <div class="w-[90%] mt-10">
            <div class="bg-transparent h-16 flex items-center p-2 hover:pl-10 transition-all duration-500 text-gray-100 font-semibold border-b-2 border-gray-100">
                <a href="{{ route('show.home') }}">Dashboard</a>
            </div>
            <div class="h-16 flex items-center p-2 hover:pl-10 transition-all duration-500 text-gray-100 font-semibold border-b-2 border-gray-100">
                <a href="/requests">Requests</a>
            </div>
            <div class="h-16 flex items-center p-2 hover:pl-10 transition-all duration-500 text-gray-100 font-semibold border-b-2 border-gray-100">
                <a href="{{ route('show.message') }}">Messaging</a>
            </div>
            <div class="h-16 flex items-center p-2 hover:pl-10 transition-all duration-500 text-gray-100 font-semibold border-b-2 border-gray-100">
                <a href="{{ route('show.home') }}">AI Chatbot</a>
            </div>
            <div class="h-16 flex items-center p-2 hover:pl-10 transition-all duration-500 text-gray-100 font-semibold border-b-2 border-gray-100">
                <a href="{{ route('show.about') }}">About</a>
            </div>
        </div>
    </div>
</div>

<script>
    let sidebar = document.querySelector(".sidebar");
    let button = document.querySelector(".btn img");
    let detail = document.getElementById('disappear');

    button.addEventListener('click', () => {
        if (sidebar.style.width === "" || sidebar.style.width === "5em") {
            // OPENING
            const fullWidth = sidebar.scrollWidth;
            sidebar.style.width = fullWidth + "px";
            detail.style.opacity = "1";
            button.style.transform = 'rotate(180deg)';
            detail.style.transition = "opacity .3s ease-in, transform .3s ease-in";
        } else {
            // CLOSING
            button.style.transform = 'rotate(0deg)';
            sidebar.style.width = "5em";
            detail.style.opacity = "0";
        }
    });
</script>


{{-- FIX THE LOGOUT BUTTON --}}