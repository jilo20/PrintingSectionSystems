<head>@vite('resources/css/app.css')</head>
@php
    $contents = [
        ['contentName' => 'Profile', 'href' => '#'],
        ['contentName' => 'Logout', 'href' => route("logout"), 'method' => 'POST'],
    ]
@endphp

<x-sidetab/>
<header class="ml-20 h-20 border-b border-borderline px-4">
    <nav class="flex h-22 items-center justify-between h-full">
        <div class="flex items-center gap-5">
            <a href="#" class="block w-32 font-black text-gray-700 text-2xl leading-none user-select-none">PRINTING <span class="text-primary">SECTION</span></a>
        </div>
        <x-dropdown :isLeft="false" :triggerName="Auth::user()->fname">
            <x-dropdown-content linkName="Profile"/>
            <x-dropdown-content linkName="Settings"/>
            <x-dropdown-content linkName="Logout" :isForm="true" href="/logout" method="post"/>
        </x-dropdown>
    </nav>
</header>