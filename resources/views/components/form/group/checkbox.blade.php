@aware(['id' => 'checkbox_'.bin2hex(random_bytes(2))])
<div class="
    inline-flex px-2 rounded-none items-center 
    border-gray-300 bg-white text-gray-900
    border-r border-y
    first:border-l first:rounded-l-md 
    p-2" >
    <input  id="{{ $id }}" type="checkbox" {{ $attributes->class(["
    w-5 h-5 accent-blue-600 
    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
    "])->merge() }} />
</div>
<label for="{{ $id }}" class="inline-flex flex-1 px-2 rounded-none border-y 
cursor-pointer
border-gray-300 bg-gray-200 text-gray-900 
last:border-r last:rounded-r-md p-2" >
    {{ $slot }}    
</label>