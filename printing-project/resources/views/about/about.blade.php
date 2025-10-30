<head>
    @vite('resources/css/app.css')
</head>

<x-header-guest>
    <div class="flex flex-col items-center justify-center min-h-[80vh] px-6 text-center">
        <x-card class="max-w-3xl flex flex-col items-center gap-6 p-10 shadow-lg bg-white">
            <img src="{{ asset('images/usjrlogo.png') }}" alt="USJR Logo" class="w-28 h-28">

            <h1 class="text-3xl font-bold text-gray-800">
                About the Printing Section
            </h1>

            <p class="text-gray-600 leading-relaxed text-lg">
                This platform simplifies the process of submitting <strong>READS printing requests</strong>.
                Instead of visiting the physical printing section, users can easily send their requests online
                and wait for approval saving time and reducing paperwork.
            </p>

            <p class="text-gray-600 leading-relaxed text-lg">
                Our goal is to make the printing  more accessible for everyone,
                ensuring that requests are properly documented, tracked, and processed through the website.
            </p>

            <x-link-button href="{{ route('show.login') }}" class="mt-8">
                Back to Login
            </x-link-button>
        </x-card>
    </div>
</x-header-guest>