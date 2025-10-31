@props([
    'isForm' => false,
    'href' => '#',
    'method' => '',
    'linkName' => 'Dummy'
])

<div class="w-full border-b border-borderline hover:bg-primary hover:text-gray-100 transition:all duration-800">
    @if($isForm)
        <form action="{{ $href }}" method="{{$method}}" class="m-0 p-0">
            @csrf
            <button class="py-2 pl-2 block w-full text-left">{{ $linkName }}</button>
        </form>
    @else
        <a class="py-2 pl-2 block w-full" href="{{ $href }}">{{ $linkName }}</a>
    @endif
</div>