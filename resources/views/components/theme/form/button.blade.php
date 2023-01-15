<button {{ 
    $attributes->merge([
        'class' => '
        px-5 py-2 rounded-md shadow-md border border-transparent
        text-white text-base text-center
        bg-blue-700 hover:bg-blue-800 
        focus:border-indigo-300 focus:ring focus:ring-indigo-300 focus:ring-opacity-50
        '
        ]) 
        }} >
    {{ $slot }}
</button>