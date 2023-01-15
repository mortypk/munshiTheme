@php
if(!isset($tab)){
    $tab= 't';
}else{
    $tab= 't'.$tab;
}
@endphp
<li @click="openTab ='{{ $tab }}'" class="inline-block cursor-pointer border-y-2 border-y-gray-50 p-3
hover:border-y-1 hover:border-b-blue-300 hover:bg-gray-100 hover:text-blue-700 hover:shadow-inner hover:shadow-gray-300 
active:border-b-blue-600 active:shadow-inner active:shadow-gray-300" x-bind:class="{'border-b-blue-400 bg-gray-100 shadow-inner' : openTab == '{{ $tab }}'}">
    {{ $slot }}
</li>