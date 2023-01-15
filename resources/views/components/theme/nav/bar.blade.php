<nav {{ $attributes->class(["bg-white shadow-md"])->merge() }}>
    <div class="container mx-auto max-w-7xl ">
        <div class="md:flex items-start text-gray-600 text-sm font-medium">
            {{ $slot }}
        </div>
    </div>
</nav>