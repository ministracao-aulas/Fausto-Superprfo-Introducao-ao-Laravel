@props([
    'type' => 'button',
])
<button
    :type="$type"
    class="btn btn-sm btn-danger">
    {{ $slot }}
</button>
