@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
if(!isset($href)){
    $href= '#';
}
@endphp
<a href="{{ $href }}" {{ $attributes->class(["flex border-y-2 border-r border-y-gray-50 p-3 text-gray-700 hover:font-bold hover:text-".$bgcolor."-700"])->merge() }}>
{{ $slot }}
</a>