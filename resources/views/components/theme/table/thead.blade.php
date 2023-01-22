<thead {{ $attributes->class(["sticky top-0 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-200"])->merge() }} >
    <tr>
        {{ $slot }}
    </tr>
</thead>