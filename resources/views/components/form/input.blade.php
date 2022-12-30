<input {!! $attributes->merge([
    'class' => '
    p-2 text-base
    dark:text-gray-700
    rounded-md shadow-sm border border-gray-300
    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
    ]) !!} value="{{ $slot }}">
