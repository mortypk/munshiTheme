@props(['flexcol' => 'gap-x-1'])
@php
if(!isset($col)){
    $flexcol = 'flex-col gap-y-1';
}
@endphp
<div  {{ $attributes->class(["flex $flexcol"])->merge() }}>
    {{ $slot }}
</div>