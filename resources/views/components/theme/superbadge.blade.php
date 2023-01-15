@props([
    'nvalue' => '',
    'bgcolor' => trans('theme.bgcolor'),
    'badgecolor' => 'red',
])
@php
// compile values so tailwind add these class in compiled file
$bg="
    bg-blue-700 bg-green-700 bg-yellow-700 bg-red-700
    ring-blue-50 ring-green-50 ring-yellow-50 ring-red-50
";
@endphp
<div class="flex justify-center space-x-1" {{ $attributes->merge() }}>
    <x-theme.form.button bgcolor="{{ $bgcolor }}" class="mr-1 relative">
        {{ $slot }}
        <span class="absolute text-sm top-0 right-0 -mt-2 -mr-3 flex rounded-full ring-2 ring-{{ $badgecolor }}-50 bg-{{ $badgecolor }}-700">
            <span class="absolute top-1 right-1 left-1 bottom-1 animate-ping rounded-lg bg-{{ $badgecolor }}-600 opacity-75"></span>
            <span class="px-1 py-1 align-baseline font-bold w-[3ch]">{{ $nvalue }}</span>
        </span>
    </x-theme.form.button>
</div>
