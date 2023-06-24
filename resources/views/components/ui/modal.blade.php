@php
    $id = $attributes->get('id');
    $title = $attributes->get('title');
    $method = $attributes->get('method');
@endphp
<div class="mt-3">
    @isset($button)
        {{ $button }}
    @endisset
    <!-- Modal -->
    <div class="modal fade" id="{{ $id }}" tabindex="-1" style="display: none;" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-body">
                    <form method="post"
                        {{ $attributes->merge()->filter(fn($value, $key) => !in_array($key, ['title', 'id', 'method'])) }}>
                        @csrf
                        @method($method)

                        {{ $slot }}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">{{ $attributes->get('submit') }}</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
