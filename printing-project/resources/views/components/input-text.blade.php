@props([
    'placeholder' => '',
    'name' => '',
    'retain' => false,
    'type' => 'text'
])

<input type="{{ $type }}" class="rounded-md" name="{{ $name }}" placeholder="{{ $placeholder }}"
@if($retain) value="{{ old($name) }}" @endif>
