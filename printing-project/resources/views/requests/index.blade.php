@vite('resources/css/app.css')

@include('layouts.header-auth')

<div class="flex flex-col items-center gap-10 mt-10">

    {{-- Create Request Button --}}
    <a 
        href="/requests/create"
        class="block bg-secondary p-4 w-40 text-center font-bold text-gray-800 
               hover:bg-primary hover:text-white 
               transition-all duration-300 rounded-lg shadow-md"
    >
        Create Request
    </a>

    {{-- Request List --}}
    <div class="flex flex-col items-center gap-6 w-full">
        @foreach ($requests as $request)
            <div class="p-6 bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 w-[30em]">

                <!-- Request ID -->
                <p class="text-xs text-gray-400 mb-1">Request #{{ $request->id }}</p>

                <!-- Description -->
                <div class="bg-yellow-300 text-gray-900 font-semibold text-lg mb-4 px-4 py-2 rounded-lg shadow-inner text-center">
                    {{ $request->description }}
                </div>

                <!-- Department -->
                <p class="mb-3 text-sm text-gray-700">
                    <span class="font-medium text-gray-600">Department:</span>
                    {{ $request->department->name ?? 'No Department' }}
                </p>

                <!-- Details Grid -->
                <div class="flex justify-between text-gray-700 text-sm">

                    <!-- Left Column -->
                    <div class="space-y-1">
                        <p><span class="font-medium text-gray-600">Original:</span> {{ $request->original }}</p>
                        <p><span class="font-medium text-gray-600">Copies:</span> {{ $request->copies }}</p>
                        <p><span class="font-medium text-gray-600">B2B:</span> {{ $request->is_b2b }}</p>
                        <p><span class="font-medium text-gray-600">Type of paper:</span> {{ $request->type_of_paper }}</p>
                    </div>

                    <!-- Right Column -->
                    <div class="grid grid-cols-[auto,1fr] gap-x-2 text-left">
                        <p class="font-medium text-gray-600">Status:</p>         <p>{{ $request->status }}</p>
                        <p class="font-medium text-gray-600">Requested by:</p>   <p>{{ $request->requested_by }}</p>
                        <p class="font-medium text-gray-600">Forwarded by:</p>   <p>{{ $request->forwarded_by }}</p>
                        <p class="font-medium text-gray-600">Received by:</p>    <p>{{ $request->received_by }}</p>
                    </div>
                </div>
                <div class="mt-4 text-right">
                    <a 
                        href="/requests/{{ $request->id }}/edit" 
                        class="text-blue-600 hover:text-blue-500 underline text-sm font-medium"
                    >
                        Edit
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>





