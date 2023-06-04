@props(['src' => 'https://picsum.photos/200/300'])
<div title="" class="m-2 flex flex-col items-center justify-center overflow-hidden rounded-md bg-gray-100 shadow-md shadow-gray-500 hover:shadow-blue-500 hover:cursor-pointer">
    <div class="w-full items-center bg-white text-center font-normal whitespace-nowrap">
        {{ $slot }}
    </div>
    <img src="{{ $src }}" class="w-full h-full" />
</div>