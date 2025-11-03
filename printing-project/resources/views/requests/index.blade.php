@vite('resources/css/app.css')

@include('layouts.header-auth')

<div class="flex flex-col gap-10 mt-10 items-center">
    <a 
        href="/requests/create"
        class="block bg-secondary p-4 w-40 font-bold text-gray-800 
               hover:bg-primary hover:text-gray-100 
               transition-all duration-400 rounded-lg shadow-sm"
    >
        Create Request
    </a>

    <div class="flex flex-col gap-6 w-full items-center">
        @foreach ($requests as $request)
            <div class="p-6 pl-8 bg-gray-50 w-[30em] border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition-all duration-300">
                <p class="text-sm text-gray-500 mb-1">#{{ $request->id }}</p>

                <!-- Yellow box for description -->
                <div class="bg-yellow-300 text-gray-900 font-bold text-lg mb-3 px-3 py-2 rounded-md shadow-inner">
                    {{ $request->description }}
                </div>
                <p>Department: {{ $request->department->name ?? 'No Department' }}</p>

                <div class="text-gray-700 text-sm space-y-1">
                    <p>Original: {{ $request->original }} | Copies: {{ $request->copies }} | B2B: {{ $request->is_b2b }}</p>
                    <p>Type of paper: {{ $request->type_of_paper }}</p>
                    <p>Status: {{ $request->status }}</p>
                    <p>Received by: {{ $request->received_by }}</p>
                    <p>Requested by: {{ $request->requested_by }}</p>
                    <p>Forwarded by: {{ $request->forwarded_by }}</p>
                </div>

                <a 
                    href="/requests/{{ $request->id }}/edit" 
                    class="inline-block mt-3 text-blue-700 hover:text-blue-500 underline text-sm font-medium"
                >
                    Edit
                </a>
            </div>
        @endforeach
    </div>
</div>




