@props([
    'href' => '',
    'class' => '',
    'type' => 1
])

@if($type == 1)
<a href="{{ $href }}" class="{{ $class }} text-gray-500 font-light text-sm hover:text-gray-800 hover:underline">{{ $slot }}</a>
@else
<a href="{{ $href }}" class="{{ $class }}">{{ $slot }}</a>
@endif