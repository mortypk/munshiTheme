@props(['href' => '#'])
<a href="{{ $href }}" {{ $attributes->class(["block px-4 py-2 hover:bg-blue-300 hover:text-black"])->merge() }}>
    {{ $slot }}
</a>