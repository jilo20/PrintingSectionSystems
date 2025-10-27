@props([
    'class' => '',
    'triggerContent' => '',
    'contents' => [],
    'width' => 'w-auto',
    'isLeft' => true,
])

<div class="relative inline-block group {{ $width }} flex {{ !$isLeft ? 'justify-end' : '' }}">
    {{-- Trigger button --}}
    <button class="border border-borderline {{ $class }} px-4 py-2 rounded-md hover:bg-secondary hover:text-gray-700">
        {{ $triggerContent }}
    </button>

    {{-- Dropdown content --}}
    <div class="absolute right-0 top-full mt-1 flex flex-col {{ $width }} border border-borderline2 bg-white opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-150 z-50">
        @foreach ($contents as $content)
            <a href="{{ $content['href'] ?? '#' }}" 
               class="border border-borderline px-4 py-2 hover:bg-primary hover:text-gray-100 w-full">
                {{ $content['contentName'] ?? 'Item' }}
            </a>
        @endforeach
    </div>
</div>



{{-- What data would look like --}}
{{-- @php
    $contents = [
        ['contentName' => 'Profile', 'href' => '#'],
        ['contentName' => 'Logout', 'href' => '#'],
    ]
@endphp --}}

{{-- Example of usage --}}
{{-- <x-dropdown :contents="$contents" triggerContent="Angelo" width="w-32"/> --}}
