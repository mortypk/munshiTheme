@php
if(!isset($tab)){
    $tab= 't';
}else{
    $tab= 't'.$tab;
}
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
// compile values so tailwind add these class in compiled file
$bg="
    bg-blue-700 bg-green-700 bg-yellow-700 bg-red-700
    border-l-blue-200 border-l-green-200 border-l-yellow-200 border-l-red-200
    hover:border-l-blue-600 hover:border-l-green-600 hover:border-l-yellow-600 hover:border-l-red-600
    hover:border-b-blue-300 active:border-b-blue-600 border-b-blue-400
    ";
@endphp
<li @click="openTab ='{{ $tab }}'" class="inline-block cursor-pointer border-y-2 border-y-gray-50 p-3
hover:border-y-1 hover:border-b-{{ $bgcolor }}-300 hover:bg-gray-100 hover:text-gray-700 hover:shadow-inner hover:shadow-gray-300 
active:border-b-{{ $bgcolor }}-600 active:shadow-inner active:shadow-gray-300" x-bind:class="{'border-b-{{ $bgcolor }}-400 bg-gray-100 shadow-inner' : openTab == '{{ $tab }}'}">
    {{ $slot }}
</li>