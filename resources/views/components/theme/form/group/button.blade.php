<button {{ $attributes->class(["
inline-flex px-4 py-2 rounded-none border-y border-blue-700
text-white 
transition-colors duration-300 transform 
bg-blue-600 hover:bg-blue-500 
focus:border-indigo-300 focus:ring focus:ring-indigo-300 focus:ring-opacity-50
first:border-l first:rounded-l-md 
last:border-r last:rounded-r-md"])->merge() }}>
    {{ $slot }}
</button>