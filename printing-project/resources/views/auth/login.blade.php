<head>@vite('resources/css/app.css')</head>
<x-header-guest>

    <div class="w-full flex justify-center mt-20">
        <x-card class="flex flex-col items-center gap-12">
            <img src="{{ asset('images/usjrlogo.png') }}" alt="USJR Logo" class="w-32 h-32">
            <form action="{{ route('login') }}" method="post" class="flex flex-col w-[25em] gap-4">
                @csrf
                <x-input-text name="email" placeholder="Email" retain="true" type="email"/>
                <x-input-text name="password" placeholder="Password" type="password"/>
                <p class="flex w-full justify-between -mt-2"><x-link-button>Forgot Password?</x-link-button> <x-link-button>Create Account</x-link-button></p>
                <x-mainbutton class="w-32 h-12 self-center mt-10">Login</x-mainbutton>
            </form>
        </x-card>
    </div>
    {{-- <form action="/login" method="POST" class="flex justify-center">
        @csrf
        <div class="bg-background flex flex-col border-2 border-borderline h-[35em] w-[25em] rounded-md mt-16 shadow-xl p-8 items-center gap-6">
            <img src="{{asset('images/usjrlogo.png')}}" class="h-32 w-32 object-contain">
            <input type="text" class="input-1 w-full" placeholder="Username" name="email">
            <input type="password" class="input-1 w-full" placeholder="Password" name="password">
            <div class="text-xs font-light flex justify-between w-full -mt-2">
                <a href="#" class="btn-2">Forgot Password?</a><a href="{{route('show.register')}}" class="btn-2">Create Account</a>
            </div>
            <button class="btn-1">Login</button>
            
            <hr class="w-full border border-borderline m-0">
            <div class="flex items-center w-full justify-center">
                <img src="{{asset('images/fblogo.png')}}" class="h-10 w-10 object-contain">
                    <p class="text-xs ml-10 leading-relaxed font-light">USJR     Printing-Section (Main)<br>
                    Printing-Basak (Basak)
                </p><br>
            </div>
            <div class="flex items-center w-full -mt-4 justify-center">
                <img src="{{asset('images/gmaillogo.png')}}" class="h-8 w-8 object-contain ml-[.3em]">
                    <p class="text-xs ml-[3.6em] leading-relaxed font-light">printingsection@usjr.edu.ph<br>
                    paoprintingbasak@gmail.com
                </p><br>
            </div>
        </div>
        <br><br>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form> --}}
</x-header-guest>