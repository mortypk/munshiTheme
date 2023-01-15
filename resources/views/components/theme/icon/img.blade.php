@props(['img' => 'https://icons.iconarchive.com/icons/aha-soft/free-game/64/Abacus-icon.png'])
<div class="flex w-[72px] cursor-pointer flex-col items-center p-1 hover:bg-gray-100 dark:hover:bg-slate-700 rounded-md">
    <img src="{{ $img }}" alt="" />
    <div class="w-full text-center text-sm">{{ $slot }}</div>
</div>