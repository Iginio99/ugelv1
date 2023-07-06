@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 py-2  rounded-md text-white-500 dark:text-white-400 dark:bg-white-800 hover:text-white-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150'
            : 'inline-flex items-center px-3 py-2  rounded-md text-white-500 dark:text-white-400 dark:bg-white-800 hover:text-white-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
