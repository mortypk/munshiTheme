@props(['href' => '#'])
<li class="border-gray-200 border-b">
    <a href="{{ $href }}" {{ $attributes->class(["
        flex px-4 py-4 
        hover:text-gray-700 hover:shadow-inner hover:shadow-gray-300 hover:border-r-blue-400 hover:bg-gray-100 hover:border-r-4 
        active:border-r-blue-600 active:shadow-inner active:shadow-gray-300
        "])->merge() }}>
        <div>
            @isset($iconpath)
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" class="h-6 w-6">
                {!! $iconpath !!}
            </svg>
            @endisset
        </div>
        <div class="pl-1 hidden md:block">{{ $slot }}</div>
    </a>
</li>