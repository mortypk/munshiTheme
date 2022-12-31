<form  {{ $attributes->class(["flex flex-col gap-y-1"])->merge() }}>
    @csrf
    {{ $slot }}
</form>