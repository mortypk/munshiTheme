<form  {{ $attributes->class([""])->merge() }}>
    @csrf
    {{ $slot }}
</form>