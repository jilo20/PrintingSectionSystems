@vite('resources/css/app.css')</head>

@include('layouts.header-guest')

<div class="w-full flex justify-center mt-20">

    <x-card class="flex flex-col items-center gap-12">
        @if($errors->any())
            <div class="text-center bg-red-200 text-red-600 w-full py-6 rounded-md">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="decoration-none">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <img src="{{ asset('images/usjrlogo.png') }}" alt="USJR Logo" class="w-32 h-32">
        <form action="{{ route('login') }}" method="post" class="flex flex-col w-[25em] gap-4">
            @csrf
            <x-input-text name="email" placeholder="Email" retain="true" type="email"/>
            <x-input-text name="password" placeholder="Password" type="password"/>
            <p class="flex w-full justify-between -mt-2">
                <x-link-button href="{{ route('show.resetpass') }}">Forgot Password?</x-link-button> 
                <x-link-button href="{{ route('show.register') }}">Create Account</x-link-button></p>
            <x-mainbutton class="w-32 h-12 self-center mt-10">Login</x-mainbutton>
        </form>
    </x-card>
</div>