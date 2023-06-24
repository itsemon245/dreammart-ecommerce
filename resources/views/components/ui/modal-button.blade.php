<button type="button" data-bs-toggle="modal"
    {{ $attributes->merge()->filter(fn($value, $key) => !in_array($key, ['id'])) }}
    data-bs-target="#{{ $attributes->get('id') }}">
    {{ $slot }}
</button>
