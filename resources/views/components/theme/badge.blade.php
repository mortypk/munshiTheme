@props([
    'nvalue' => '',
    'bgcolor' => trans('theme.bgcolor'),
    'badgecolor' => 'red',
])
@php
// compile values so tailwind add these class in compiled file
$bg="
    bg-blue-700 bg-green-700 bg-yellow-700 bg-red-700
    text-blue-100 text-green-100 text-yellow-100 text-red-100
";
@endphp
<div {{ $attributes->class(["flex justify-center space-x-1"])->merge() }}>
    <x-theme.form.button bgcolor="{{ $bgcolor }}" class="inline-flex items-center pl-2 pr-1 py-2 text-sm font-medium text-center">
        {{ $slot }}
        <span class="bg-{{ $badgecolor }}-700 text-{{ $badgecolor }}-100 text-xs font-semibold mx-1 px-1 py-0.5 rounded">
            {{ $nvalue }}
        </span>
    </x-theme.form.button>
</div>
