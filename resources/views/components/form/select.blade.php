@php
    $name = $attributes->get('name');
    $placeholder = $attributes['placeholder'];
    $options = $attributes->get('options');
    $value = $attributes->get('value');
@endphp
@props([
    'options' => [],
    'name' => '',
    'label' => '',
    'value' => '',
    'placeholder' => '',
])

<div class="mb-3">
    <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    <select
        {{ $attributes->class(['form-select'])->merge()->filter(fn($value, $key) => in_array($key, ['class', 'name'])) }}>

        <option>{{ Str::headline($placeholder) }}</option>
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
