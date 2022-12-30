@props(['value'])

<label {{ $attributes->merge([
    'class' => '
    font-medium text-sm text-gray-700
    dark:text-gray-200 
    '
    ]) }}>
    {{ $value ?? $slot }}
</label>