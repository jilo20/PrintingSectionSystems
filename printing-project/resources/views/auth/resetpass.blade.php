<head>@vite('resources/css/app.css')</head>
@include('layouts.header-guest')

<div class="h-full w-full bg-no-repeat bg-cover bg-opacity-95"
     style="background-image: url('{{ asset('images/usjrcampus.jpg') }}');">

    <div class="w-full h-full bg-gray-100 bg-opacity-50 backdrop-blur-lg">
        <div class="w-full flex justify-center">
            <x-card class="bg-gray-200 bg-opacity-70 flex flex-col items-center gap-12  mt-20">
                <img src="{{ asset('images/usjrlogo.png') }}" alt="USJR Logo" class="w-32 h-32">
                <form action="{{ route('resetpass') }}" method="post" class="flex flex-col w-[25em] gap-4">
                    @csrf
                    <x-input-text name="email" placeholder="Email" retain="true" type="email"/>
                    <x-input-text name="new_password" placeholder="New Password" type="password"/>
                    <x-input-text name="confirm_password" placeholder="Confirm Password" type="password"/>
                    <p class="flex w-full justify-between -mt-2">
                        <x-link-button href="{{ route('show.login') }}">Back to Login</x-link-button>
                        <x-mainbutton class="w-32 h-12 self-center">Confirm</x-mainbutton>
                    </p>
                </form>
            </x-card>
        </div>
    </div>
</div>