@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
if(!isset($caption)){
    $caption= 'Dropdown';
}
@endphp
<!-- Dropdown toggle start -->
<div x-data="{ dropdownMenu: false }" class="relative">
    <!-- Dropdown toggle button -->
    <a @click="dropdownMenu = ! dropdownMenu"
        class="flex p-3 border-y-2 border-y-gray-50 hover:text-gray-700 hover:shadow-inner hover:shadow-gray-300 hover:border-b-{{ $bgcolor }}-300 hover:bg-gray-100 hover:border-y-1 active:border-b-{{ $bgcolor }}-600 active:shadow-inner active:shadow-gray-300">
        <span class="mr-4">{{ $caption }}</span>
        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
            aria-hidden="true">
            <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                clip-rule="evenodd" />
        </svg>
    </a>
    <!-- Dropdown list -->
    <div x-show="dropdownMenu" @click.outside="dropdownMenu = false"
        class="absolute z-50 right-0 py-2 mt-1 text-sm text-gray-500 bg-gray-50 rounded-md shadow-xl w-44">
        {{ $slot }}
    </div>
</div>
<!-- Dropdown toggle End -->
