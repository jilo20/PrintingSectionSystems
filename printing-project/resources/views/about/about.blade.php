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
                This platform simplifies the process of submitting READS printing requests.
                Instead of visiting the physical printing section, users can easily send their requests online
                and wait for approval saving time and reducing paperwork.
            </p>

            <p class="text-gray-600 leading-relaxed text-lg">
                The Printing Section offers convenient services like Risograph printing, 
                photocopying, and lamination to help students and staff with 
                their academic and office needs.
            </p>

            {{-- Services Section --}}
            <div class="grid md:grid-cols-3 gap-6 mt-6 text-left">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/risograph.jpg') }}" alt="Risograph Printing" 
                         class="w-40 h-40 object-cover rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 mt-4">Risograph Printing</h2>
                    <p class="text-gray-600 mt-2 text-center">
                        A fast and eco-friendly duplicating process ideal for mass-printing handouts, flyers, and forms.
                    </p>
                </div>

                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/photocopy.jpg') }}" alt="Photocopying" 
                         class="w-40 h-40 object-cover rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 mt-4">Photocopying</h2>
                    <p class="text-gray-600 mt-2 text-center">
                        Provides quick and reliable duplication of documents for academic and administrative use.
                    </p>
                </div>

                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/lamination.jpg') }}" alt="Lamination" 
                         class="w-40 h-40 object-cover rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-gray-800 mt-4">Lamination</h2>
                    <p class="text-gray-600 mt-2 text-center">
                        Protects documents and IDs with a durable plastic coating to ensure long-lasting quality.
                    </p>
                </div>
            </div>

            <p class="text-gray-600 leading-relaxed text-lg mt-8">
                Our goal is to make the printing process more accessible for everyone,
                ensuring that requests are properly documented, tracked, and processed through the website.
            </p>

            <x-link-button href="{{ route('show.login') }}" class="mt-8">
                Back to Login
            </x-link-button>
        </x-card>
    </div>
</x-header-guest>

