@props(['active'])

@php
$classes = ($active ?? false)
            ? ''
            : '';
@endphp

<a style="display: inline-block; margin:0px" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
