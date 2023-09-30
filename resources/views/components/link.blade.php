@props([
    'href'
])
@php
    $classes = 'inline-flex items-center px-1 pt-1 border-b-2 border-green-700 dark:border-green-900 text-sm font-medium leading-5 text-lime-600 dark:text-lime-100 focus:outline-none focus:border-green-800 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes, 'href' => $href ?? '#' ]) }}>
    {{ $slot }}
</a>
