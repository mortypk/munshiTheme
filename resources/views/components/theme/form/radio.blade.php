@props(['id' => 'radio'.microtime()])
<input type="radio" id="new" name="new"  {!! $attributes->merge([
    'class' => '
    w-5 h-5
    p-2 text-base
    rounded-md shadow-sm border border-gray-300
    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
    ]) !!} value="{{ $slot }}">