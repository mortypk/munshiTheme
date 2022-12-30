<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Style and Scripts -->
    @vite( ['resources/css/app.css', 'resources/js/app.js'])
    <title>Laravel Theme</title>
</head>
<body>
    <div class="dark m-2 p-2 bg-slate-800 text-gray-100 flex flex-col gap-y-1">
        <x-form.label>Name</x-form.label>
        <x-form.input>Light Submit</x-form.input>
        <div class="flex items-center gap-1">
            <x-form.radio name="gender" /> Male
            <x-form.radio name="gender" /> Female
        </div>
        <x-form.select>
            <x-form.option value="1">Select List</x-form.option>
            <x-form.option value="1" >Select List</x-form.option>
        </x-form.select>
        <div class="flex items-center gap-1">
            <x-form.checkbox></x-form.checkbox> Subscribe
        </div>
        <div>
            <x-form.textarea></x-form.textarea>
        </div>
        <x-form.button type='submit'>Light Submit</x-form.button>
        <div>
            <x-form.chip>New</x-form.chip>
        </div>
    </div>
    {{--  --}}
    <div class="m-2 p-2 bg-blue-50 flex flex-col gap-y-1">
        <x-form.label>Name</x-form.label>
        <x-form.input>Light Submit</x-form.input>
        <div class="flex items-center gap-1">
            <x-form.radio name="gender" /> Male
            <x-form.radio name="gender" /> Female
        </div>
        <x-form.select>
            <x-form.option value="1">Select List</x-form.option>
            <x-form.option value="1" >Select List</x-form.option>
        </x-form.select>
        <div class="flex items-center gap-1">
            <x-form.checkbox></x-form.checkbox> Subscribe
        </div>
        <div>
            <x-form.textarea></x-form.textarea>
        </div>
        <x-form.button type='submit'>Light Submit</x-form.button>
    </div>
</body>
</html>