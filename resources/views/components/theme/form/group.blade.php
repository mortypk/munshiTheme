@props(['id' => 'group_'.bin2hex(random_bytes(2))])
<div class="flex flex-col">
    <div {{ $attributes->class(["flex"])->merge() }}>        
    {{ $slot }}
    </div>
    @isset($showError)
    <div class="text-sm text-red-500">{{ $showError }}</div>
    @endisset
</div>