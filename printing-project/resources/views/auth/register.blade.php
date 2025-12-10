<head>@vite('resources/css/app.css')</head>

@include('layouts.header-guest')

@php
    $roles = collect([
        (object) ['id' => 1, 'name' => 'Office Head/Principal'],
        (object) ['id' => 2, 'name' => 'Staff/Teacher'],
        (object) ['id' => 3, 'name' => 'READS'],
    ]);
@endphp

<div class="h-full w-full bg-no-repeat bg-cover bg-opacity-95"
     style="background-image: url('{{ asset('images/usjrcampus.jpg') }}');">
    <div class="w-full h-full bg-gray-100 bg-opacity-50 backdrop-blur-lg">
    <div class="w-full flex justify-center">
        <x-card class="bg-gray-200 bg-opacity-70 mt-20 w-[30em] flex flex-col items-center gap-4">
            <h1 class="text-3xl font-bold">Create an account</h1>
            @if($errors->any())
                <div class="text-center bg-red-200 text-red-600 w-full py-6 rounded-md">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="decoration-none">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route("register") }}" class="w-full flex flex-col gap-6" method="post">
                @csrf
                <x-input-text placeholder="First Name" name="fname" retain=true/>
                <x-input-text placeholder="Last Name" name="lname" retain=true/>
                <x-input-text placeholder="Email" name="email" retain=true type="email"/>
                <x-input-text placeholder="Password" name="password" type="password"/>
                <x-input-text placeholder="Password" name="password_confirmation" type="password"/>
                <x-single-select 
                    name="deptId" 
                    :data="$departments" 
                    dataId="deptId" 
                    dataName="deptName"
                />
                <x-single-select 
                    name="role" 
                    :data="$roles" 
                    dataId="id" 
                    dataName="name"
                />

                <x-mainbutton class="w-64 self-center h-12">Register</x-mainbutton>
            </form>
        </x-card>
    </div>

</div>
</div>