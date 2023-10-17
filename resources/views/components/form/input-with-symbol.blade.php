@php
    $name = $attributes->get('name');
@endphp
@props([
    'symbol' => '',
    'name' => '',
    'label'=> ''
])
<div class="mb-3">
    <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    <div class="input-group">
        <span class="input-group-text" id="basic-addon11">
            @if (str()->contains($symbol, 'bx'))
                <i class='bx {{ $symbol }}'></i>
            @else
                {{ $symbol }}
            @endif
        </span>
        <input {{ $attributes->class(['form-control'])->merge() }}>
    </div>
    @error($name)
        <div id="{{ $name . '-error' }}" class="text-danger form-text">
            {{ $message }}
        </div>
    @enderror

</div>
