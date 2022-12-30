@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
@endphp<textarea {{ $attributes->merge([
    'class' => '
    p-2 text-base w-full
    dark:text-gray-700
    rounded-md shadow-sm border border-gray-300
    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
    ]) }}>{{ $slot }}</textarea>
