@props([
    'title' => '',
    'mtime' => '0 min',
    'bgcolor' => trans('theme.bgcolor'),
    'type' => 'info',
])
@php
$bgcolor=trans('theme.'.$type.'bgcolor');
// compile values so tailwind add these class in compiled file
$bg="
    bg-blue-400 bg-green-400 bg-yellow-400 bg-red-400
    text-blue-900 text-green-900 text-yellow-900 text-red-900
    border-blue-500 border-green-500 border-yellow-500 border-red-500
";
@endphp
<div x-data x-ref="toast" {{ $attributes->class(["pointer-events-auto mx-auto mb-3 block w-full rounded-lg bg-clip-padding text-sm shadow-lg"])->merge() }}>
    <!-- toast start -->
    <div class="flex items-center justify-between rounded-t-lg border-b border-{{ $bgcolor }}-500 bg-{{ $bgcolor }}-400 bg-clip-padding py-2 px-3">
        <p class="flex items-center font-bold text-slate-800">
            <svg aria-hidden="true" focusable="false" class="mr-2 h-4 w-4 fill-current text-{{ $bgcolor }}-900" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                {!! trans('theme.'.$type.'SvgPath') !!}
            </svg>
            {{ $title }}
        </p>
        <div class="flex items-center">
            <p class="text-xs text-white opacity-90">{{ $mtime }}</p>
            <button class="bg-transparent text-gray-200 hover:text-gray-700" @click="$refs.toast.remove()">
                <svg class="ml-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                    {!! __('theme.closeSvgPath') !!}
                </svg>
            </button>
        </div>
    </div>
    <div class="break-words rounded-b-lg bg-white dark:bg-slate-700 dark:text-gray-50 p-3 text-black">{{ $slot }}</div>
    <!-- toast end -->
</div>
