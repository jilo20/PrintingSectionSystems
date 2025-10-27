@props([
    'class' => ''
])

<div class="inline-block p-8 border border-borderline2 {{ $class }}
    shadow-lg rounded-md">
    {{$slot}}
</div>