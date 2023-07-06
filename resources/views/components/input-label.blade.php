@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-black-100']) }}>
    {{ $value ?? $slot }}
</label>
