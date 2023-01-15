@php
if(isset($img)){
    $img= '<img class="h-9 w-9 max-w-none rounded-full" alt="loading" src="'.$img.'" /> ';
}else{
    $img='';
}
@endphp
<div x-data {{ $attributes->class(["
flex w-fit cursor-pointer rounded-full 
dark:bg-gray-200 dark:text-gray-500 dark:hover:text-slate-900
bg-slate-700 text-slate-300 hover:text-slate-50
"])->merge() }}>
    {!! $img !!}
    <span class="flex items-center text-sm font-semibold px-3 py-2 truncate">{{ $slot }}</span>
    <button class="hover bg-transparent focus:outline-none" @click="$el.parentNode.remove()">
        <svg class="mr-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
            <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
        </svg>
    </button>
</div>