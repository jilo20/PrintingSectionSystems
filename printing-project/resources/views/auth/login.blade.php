@vite('resources/css/app.css')

@include('layouts.header-guest')

<div class="h-full w-full bg-no-repeat bg-cover bg-opacity-95"
     style="background-image: url('{{ asset('images/usjrcampus.jpg') }}');">

    <div class="w-full h-full bg-gray-100 bg-opacity-50 backdrop-blur-lg">

        <div class="w-full flex justify-center gap-10">

            <!-- Login Card -->
            <x-card class="flex flex-col items-center gap-12 mt-20 bg-gray-100 bg-opacity-80">
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
                        <x-link-button href="{{ route('show.register') }}">Create Account</x-link-button>
                    </p>
                    <x-mainbutton class="w-32 h-12 self-center mt-10">Login</x-mainbutton>
                </form>
            </x-card>

            <!-- Announcements Card -->
            <x-card class="mt-20 w-[50em] bg-gray-100 bg-opacity-80 overflow-y-scroll h-[40em]">
                <div class="h-16 w-full text-green-800 font-extrabold text-4xl flex items-center justify-center">
                    <p>ANNOUNCEMENTS</p>
                </div>

                <x-card class="w-full flex flex-col items-center gap-4">
                    <div class="bg-yellow-300 font-bold text-2xl p-6 rounded-lg text-center">
                        Office Closed Monday for Immaculate Conception
                    </div>
                    <p class="w-[85%] text-center">
                        The Printing Section will be closed on Monday in observance of the Feast of the Immaculate Conception. There will be no office work or on-site duty during the holiday. Regular operations will resume on Tuesday.
                    </p>
                </x-card>
                <br>
                <x-card class="w-full flex flex-col items-center gap-4">
                    <div class="bg-yellow-300 font-bold text-2xl p-6 rounded-lg">
                        Printing Progress Delayed Due to Broken Risograph
                    </div>
                    <p class="w-[85%] text-center">
                        The Risograph in the Printing Section is currently out of order, which may delay some printing requests. Staff are working to resolve the issue as quickly as possible. Regular printing operations are expected to resume once the machine is repaired.                    </p>
                </x-card>
                <br>
                <x-card class="w-full flex flex-col items-center gap-4">
                    <div class="bg-yellow-300 font-bold text-2xl p-6 rounded-lg text-center">
                        Office Closed Monday for Immaculate Conception
                    </div>
                    <p class="w-[85%] text-center">
                        The Printing Section will be closed on Monday in observance of the Feast of the Immaculate Conception. There will be no office work or on-site duty during the holiday. Regular operations will resume on Tuesday.
                    </p>
                </x-card>
            </x-card>

        </div>

    </div>
</div>
