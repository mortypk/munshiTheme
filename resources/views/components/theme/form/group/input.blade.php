@aware(['id' => 'checkbox_'.bin2hex(random_bytes(2))])
@php
if(!isset($type)){
    $type= 'text';
}else{
    if (in_array($type, array("button","checkbox","color","date","datetime-local","email","file","hidden","image","month","number","password","radio","range","reset","search","submit","tel","text","time","url","week"))){
        $type= $type;
    }else {
        $type= 'text';
    }
}
@endphp
<input id="{{ $id }}" type="{{ $type }}" {{ $attributes->class(["
    block p-1 w-full min-w-0 flex-1 rounded-none border border-gray-300 
    bg-white text-base
    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
    first:rounded-l-md last:rounded-r-md
    "])->merge() }} value="{{ $slot }}" />