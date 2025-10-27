@props([
    'placeholder' => '',
    'name' => '',
    'retain' => false,
    'type' => 'text'
])

<input type="{{ $type }}" class="h-12 rounded-md border border-borderline2 focus:border-borderline" name="{{ $name }}" placeholder="{{ $placeholder }}"
@if($retain) value="{{ old($name) }}" @endif>
