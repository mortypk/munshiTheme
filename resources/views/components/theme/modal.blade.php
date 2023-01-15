@php
if(!isset($modalID)){
    $modalID= 'showModal';
}
@endphp
<!-- Model Mask -->  
<div x-data="{ modal: '' }" 
    x-on:modal.window="modal = $event.detail" 
    x-show="modal === '{{ $modalID }}'"  
    x-ref="{{ $modalID }}" 
    class="fixed z-50 top-0 bottom-0 right-0 left-0 flex items-center justify-center bg-gray-200 bg-opacity-75 p-1" >
    <!-- style="display: none;" Model Window -->
    <div class="pointer-events-auto mx-auto block w-full max-w-4xl rounded-lg bg-clip-padding text-sm " @click.outside="modal = 'none'" >
        {{ $slot }}
    </div>
    <!-- Model Window End -->
</div>
<!-- Mask End -->