<head>@vite('resources/css/app.css')</head>
<x-header-guest>

    <div class="w-full flex justify-center mt-20">
        <x-card class="flex flex-col items-center gap-12">
            <img src="{{ asset('images/usjrlogo.png') }}" alt="USJR Logo" class="w-32 h-32">
            <form action="{{ route('resetpass') }}" method="post" class="flex flex-col w-[25em] gap-4">
                @csrf
                <x-input-text name="email" placeholder="Email" retain="true" type="email"/>
                <x-input-text name="old password" placeholder=" Old Password" type="password"/>
                <x-input-text name="new password" placeholder=" New Password" type="password"/>
                <x-input-text name="confirm password" placeholder=" Confirm Password" type="password"/>
                <p class="flex w-full justify-between -mt-2"><x-link-button href="{{ route('show.login') }}">Back to Login</x-link-button> <x-link-button>Confirm Password</x-link-button></p>
                <x-mainbutton class="w-32 h-12 self-center mt-10">Login</x-mainbutton>
            </form>
        </x-card>
    </div>

</x-header-guest>