@props(['href' => '#'])
<a href="{{ $href }}" {{ $attributes->class(["
    flex border-y-2 border-y-gray-50 p-3 cursor-pointer 
    hover:border-y-1 hover:border-b-blue-300 hover:bg-gray-100 hover:text-blue-700 hover:shadow-inner hover:shadow-gray-300 
    active:border-b-blue-600 active:shadow-inner active:shadow-gray-300"])->merge() }}>
    <div>
        @isset($iconpath)
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" class="h-6 w-6">
            {!! $iconpath !!}
        </svg>
        @endisset
    </div>
    <div class="pl-1">{{ $slot }}</div>
</a>