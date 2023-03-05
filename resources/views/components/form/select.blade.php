@php
    $name = $attributes['name'];
    $placeholder = $attributes['placeholder'];
@endphp


<div class="mb-3">
    <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    <select
        {{ $attributes->class(['form-select'])->merge()->filter(fn($value, $key) => in_array($key, ['name', 'class'])) }}>

        <option selected disabled>{{ Str::headline($placeholder) }}</option>
        @foreach ($options as $option)
            <option {{ $option->id === $value ? 'selected' : '' }} value="{{ $option->id }}">{{ $option->name }}
            </option>
        @endforeach
    </select>
    @error($name)
        <div id="{{ $name . '-error' }}" class="text-danger form-text">
            {{ $message }}
        </div>
    @enderror

</div>
