@aware(['id' => ''])
<label for="{{ $id }}" {{ $attributes->merge([
    'class' => '
    inline-flex px-2 rounded-none border-y 
    border-gray-300 bg-gray-200 text-gray-800 
    first:border-l first:rounded-l-md 
    last:border-r last:rounded-r-md p-2
    '
    ]) }} >
    {{ $slot }}
</label>