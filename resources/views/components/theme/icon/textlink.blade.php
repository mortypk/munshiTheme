@props([
    'href' => '#',
    'bgcolor' => trans('theme.bgcolor'),
])
@php
// compile values so tailwind add these class in compiled file
$bg="
    bg-blue-700 bg-green-700 bg-yellow-700 bg-red-700
    border-l-blue-200 border-l-green-200 border-l-yellow-200 border-l-red-200
    hover:border-l-blue-600 hover:border-l-green-600 hover:border-l-yellow-600 hover:border-l-red-600
";
@endphp
<a href=" {{ $href }} " {{ $attributes->class(["
    flex flex-row m-1 rounded-md 
    border-gray-400 bg-gray-50 
    transition duration-500 shadow ease-in-out transform 
    hover:-translate-y-1 
    hover:shadow-lg select-none cursor-pointer 
    overflow-hidden"])->merge() }} >
    <div class="flex border-l-{{ $bgcolor }}-200 border-l-8 w-full h-24 
    hover:border-l-{{ $bgcolor }}-600 
    p-2 ">
        <div class="w-24 flex-none h-20 py-2 ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <path class="fill-gray-100" d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
            </svg>
        </div>
        <div class="h-20 grow p-1 pl-2 font-semibold overflow-y-hidden">
            {{ $slot }}
        </div>
    </div>
</a>