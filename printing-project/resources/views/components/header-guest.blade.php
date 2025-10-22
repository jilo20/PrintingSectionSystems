<head>@vite('resources/css/app.css')</head>

<header class="w-full h-20 border-b border-borderline px-4">
    <nav class="flex items-center justify-between h-full">
            <a href="#" class="block w-32 m-2 font-black text-gray-700 text-2xl leading-none user-select-none">PRINTING <span class="text-primary">SECTION</span></a>
            
            <div class="flex items-center gap-10">
                <a href="#" class="btn-2">About</a>
                @if (Route::is('show.register'))
                    <a class="btn-1" href="{{ route('show.login') }}">Login</a>
                @else
                    <a class="btn-1" href="{{ route('show.register') }}">Register</a>
                @endif 
            </div>
        </nav>
</header>

<body>
    {{ $slot }}
</body>