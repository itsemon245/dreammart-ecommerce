@php
    $name = $attributes['name'];
    $value = $attributes['value'];
@endphp

<div class="mb-3">
    <div class="input-group">
        <span class="input-group-text">{{ Str::upper($label) }}</span>
        <textarea {{ $attributes->class(['form-control'])->merge() }} aria-label="{{ $label }}" placeholder="Comment">{{ $value }}</textarea>
    </div>
    @error($name)
        <div id="{{ $name . '-error' }}" class="text-danger form-text">
            {{ $message }}
        </div>
    @enderror

</div>
