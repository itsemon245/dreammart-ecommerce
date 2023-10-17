@php
    $name = $attributes['name'];
    $label = $attributes['label'];
@endphp
@props([
    'name'=> '',
    'label'=> '',
])
<div class="mb-3">
    <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    <input {{ $attributes->class(['form-control'])->merge() }} />

    @error($name)
        <div id="{{ $name . '-error' }}" class="text-danger form-text ms-1">
            {{ $message }}
        </div>
    @enderror

</div>
