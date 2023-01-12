@php
    if(!isset($show)){
        $show="t1";
    }else{
        $show= 't'.$show;
    }
@endphp
<div x-data="{ openTab: '{{ $show }}' }"
{{ $attributes->class(["shadow-lg rounded-b-lg bg-white p-1"])->merge() }}>
    <div class="p-1">
        {{ $slot }}
    </div>
</div>