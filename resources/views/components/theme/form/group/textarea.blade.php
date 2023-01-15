<textarea {{ $attributes->class(["
block p-1 w-full min-w-0 flex-1 rounded-none border border-gray-300 
bg-white text-base 
focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
first:rounded-l-md last:rounded-r-md"])->merge() }}>{{ $slot }}</textarea>
