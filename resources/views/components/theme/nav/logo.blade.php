@php
if(!isset($href)){
    $href= '#';
}
@endphp
<a href="{{ $href }}" {{ $attributes->class(["flex border-y-2 border-r border-y-gray-50 p-3 text-gray-700 font-bold hover:text-blue-700"])->merge() }}>
{{ $slot }}
</a>