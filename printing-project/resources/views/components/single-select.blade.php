@props([
    'data' => [],
    'name' => ''
])

<select name="{{ $name }}" id="{{ $name }}" class="rounded-md border p-2">
    @foreach ($data as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
</select>
