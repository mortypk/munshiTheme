@php
if(!isset($href)){
    $href= '#';
}
@endphp
<li class="border-gray-200 border-b">
    <a href="{{ $href }}" {{ $attributes->class(["flex px-4 py-4 align-middle"])->merge() }}>
        <div>
            <img src="{{ asset('img/logo.jpg') }}" class="w-6 h-6" />
        </div>
        <div class="pl-1 text-black font-bold hidden md:block">
            {{ $slot }}
        </div>
    </a>
</li>