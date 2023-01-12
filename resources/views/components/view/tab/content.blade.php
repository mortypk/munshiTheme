@php
    if(!isset($tab)){
        $tab= 't';
    }else{
        $tab= 't'.$tab;
    }
    if(!isset($bgcolor)){
        $bgcolor= trans('theme.bgcolor');
    }
@endphp
<div x-show="openTab === '{{ $tab }}'" 
{{ $attributes->class(["shadow-lg rounded-b-lg bg-white p-1"])->merge() }}>
    {{ $slot }}
</div>