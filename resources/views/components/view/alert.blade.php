@php
if (isset($type)) {
    $svgpath = trans('theme.' . $type . 'SvgPath');
} else {
    $type = 'info';
    $svgpath = trans('theme.' . $type . 'SvgPath');
}
$bgcolor = trans('theme.' . $type . 'bgcolor');
if (!isset($title)) {
    $title = '';
}
// compile values so tailwind add these class in compiled file
$bg="
    bg-blue-200 bg-green-200 bg-yellow-200 bg-red-200
    text-blue-300 text-green-300 text-yellow-300 text-red-300
    dark:text-blue-300 dark:text-green-300 dark:text-yellow-300 dark:text-red-300
    hover:text-blue-600 hover:text-green-600 hover:text-yellow-600 hover:text-red-600
    text-blue-900 text-green-900 text-yellow-900 text-red-900
    border-blue-400 border-green-400 border-yellow-400 border-red-400
";
@endphp
<div x-data class="relative mb-1 shadow " {{ $attributes->merge() }}>
    <!-- {{ $type }} Alert box start -->
    <div class="flex ">
        <div class="w-16 bg-{{ $bgcolor }}-200">
            <div class="flex h-full items-center relative overflow-hidden">
                <svg width="92" height="92"
                    class="absolute m-auto fill-current text-{{ $bgcolor }}-300 hover:text-{{ $bgcolor }}-600"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    {!! $svgpath !!}
                </svg>
            </div>
        </div>
        <div class="w-full border-r-4 border-{{ $bgcolor }}-400 bg-white dark:bg-slate-700 p-4">
            <p class="font-bold text-{{ $bgcolor }}-900 dark:text-{{ $bgcolor }}-300"> {{ $title }}</p>
            <p class="text-sm text-gray-600 dark:text-gray-50">{{ $slot }}</p>
        </div>
    </div>
    <button @click="$el.parentNode.remove()"
        class="absolute right-0 top-1 mr-2 bg-transparent text-3xl font-bold text-gray-400 hover:text-gray-700 dark:hover:text-gray-100">
        <svg class="ml-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
            {!! __('theme.closeSvgPath') !!}
        </svg>
    </button>
    <!-- {{ $type }} Alert box End-->
</div>
