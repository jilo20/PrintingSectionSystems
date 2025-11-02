@vite('resources/css/app.css')

@include('layouts.header-auth')

<h1>
    @foreach ($requests as $request)
        {{ $request->received_by }} <a href="/requests/{{ $request->id }}/edit">Edit</a><br>
    @endforeach
</h1>

<a href="/requests/create">Create</a>