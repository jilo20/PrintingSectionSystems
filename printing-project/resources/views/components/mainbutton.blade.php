@props([
    'class' => '',
    'href' => ''
])

<button class="bg-primary font-medium text-gray-100 p-2 rounded-md {{ $class }} hover:bg-secondary transition-all duration-200 hover:text-gray-900"
        href="{{ $href }}">{{ $slot }}</button>