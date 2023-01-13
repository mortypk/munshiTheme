@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
if(!isset($href)){
    $href= '#';
}
@endphp
<a {{ $attributes->class(["block px-4 py-2 hover:bg-".$bgcolor."-300 hover:text-black"])->merge() }}>
    {{ $slot }}
</a>