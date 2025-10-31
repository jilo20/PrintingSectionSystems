@props([
    'triggerName' => 'Add Name',
    'isLeft' => true
])

<div class="relative group flex flex-col @if(!$isLeft) items-end @endif">
    <button class="w-fit border-2 border-primary p-2 px-4 text-primary font-semibold group-hover:bg-primary group-hover:text-gray-100 transition-all duration-800">
        {{ $triggerName }}
    </button>

    <div class="flex flex-col w-full origin-top scale-y-0 bg-gray-100 border border-borderline2 shadow-md w-[10rem] absolute top-12 opacity-0 group-hover:opacity-100 group-hover:scale-y-100 transition-all duration-800 text-left w-full">
        {{ $slot }}
    </div>
    
</div>