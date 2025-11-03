@vite('resources/css/app.css')

@include('layouts.header-auth')

<div class="flex flex-col gap-10 mt-10 items-center">
    <a href="/requests/create" 
    class="block bg-secondary p-4 w-40 font-bold text-gray-800 hover:bg-primary hover:text-gray-100 transition-all duration-400">Create Request</a>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
        @foreach ($requests as $request)
        <div class="p-4 pl-8 bg-green-300 w-[30em] border border-green-500">
            ({{ $request->id }})
            <h2 class="font-bold">{{ $request->description }}</h2>
            Original: {{ $request->original }} | Copies: {{ $request->copies }} | B2B: {{ $request->is_b2b }} <br>
            Type of paper: {{ $request->type_of_paper }} <br>
            Status: {{ $request->status }} <br>
            Received by: {{ $request->received_by }} <br>
            Requested by: {{ $request->requested_by }} <br>
            Forwarded by: {{ $request->forwarded_by }} <br>
            <a href="/requests/{{ $request->id }}/edit" class="text-blue-700 hover:text-blue-400 underline">Edit</a><br>
        </div>
        @endforeach
    </div>

</div>


