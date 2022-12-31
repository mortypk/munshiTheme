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
    {{-- <div class="dark m-2 p-2 bg-slate-800 text-gray-100 flex flex-col gap-y-1">
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
        <div class="flex gap-1 items-center">
            <x-form.button-cancel>Cancel</x-form.button>
            <x-form.button-submit >Light Submit</x-form.button>
        </div>
        <div class="flex gap-1 items-center">
            <x-form.chip img="https://i.pravatar.cc/48?img=1">New</x-form.chip>
            <x-form.chip>New 2</x-form.chip>
            <x-form.chip>New 3 </x-form.chip>
        </div>
        <x-form.spin></x-form.spin>
    </div> --}}
    {{--  --}}
    <div class="m-2 p-2 bg-blue-50 flex flex-col gap-y-1">
        <x-form.group id="group_inp1" >
            <x-form.group.label>Group label</x-form.group.label>
            <x-form.group.input></x-form.group.input>
            <x-form.group.button>Add</x-form.group.button>
        </x-form.group>
        <x-form.group id="group_inp2">
            <x-form.group.radio>Radio label</x-form.group.radio>
        </x-form.group>
        <x-form.group id="group_inp3">
            <x-form.group.checkbox>checkbox label</x-form.group.checkbox>
        </x-form.group>
        <x-form.group id="group_inp4">
            <x-form.group.label>Select label</x-form.group.label>
            <x-form.group.select>
                <x-form.group.option>One</x-form.group.option>
                <x-form.group.option>Two</x-form.group.option>
            </x-form.group.select>
        </x-form.group>
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
        <div class="flex gap-1 items-center">
            <x-form.button-cancel>Cancel</x-form.button>
            <x-form.button-submit >Light Submit</x-form.button>
        </div>
        <div class="flex gap-1 items-center">
            <x-form.chip img="https://i.pravatar.cc/48?img=1">New</x-form.chip>
            <x-form.chip>New 2</x-form.chip>
            <x-form.chip>New 3 </x-form.chip>
        </div>
        <x-form.spin></x-form.spin>
    </div>
</body>
</html>