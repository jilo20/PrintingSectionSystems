@props([
    'data' => [],        // Collection or array
    'name' => '',        // Name of the select
    'dataId' => 'id',    // Column to use for option value
    'dataName' => 'name' // Column to use for option label
])

<select name="{{ $name }}" id="{{ $name }}" class="rounded-md border p-2 rounded">
    @foreach ($data as $item)
        <option value="{{ $item->{$dataId} }}">
            {{ $item->{$dataName} }}
        </option>
    @endforeach
</select>
