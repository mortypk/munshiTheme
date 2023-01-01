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
    <div class="dark bg-slate-800 m-2 p-2 mx-auto flex flex-wrap gap-1">
        <x-view.icontextlink href="?{{ 1 }}" class="w-96">
            {{ 1 }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod minus, beatae numquam commodi explicabo architecto veniam, odio quo, aliquid labore cum est! Perferendis inventore quas saepe autem, ipsam sunt ex?
        </x-view.icontextlink>
        <x-view.icontextlink href="?{{ 1 }}" class="w-96">
            {{ 1 }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod minus, beatae numquam commodi explicabo architecto veniam, odio quo, aliquid labore cum est! Perferendis inventore quas saepe autem, ipsam sunt ex?
        </x-view.icontextlink>
    </div>
    <div class="m-2 p-2 flex flex-col gap-1 bg-blue-100">
        <x-view.icontextlink href="?{{ 1 }}">
            {{ 1 }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod minus, beatae numquam commodi explicabo architecto veniam, odio quo, aliquid labore cum est! Perferendis inventore quas saepe autem, ipsam sunt ex?
        </x-view.icontextlink>
    </div>
    <div class="dark bg-slate-800 m-2 p-2 flex flex-col gap-1">
        <x-view.superbadge nvalue="70">Notification</x-view.superbadge>
        <x-view.badge nvalue="10">Notification</x-view.badge>
    </div>
    <div class="m-2 p-2 flex flex-col gap-1 bg-blue-100">
        <x-view.superbadge nvalue="70">Notification</x-view.superbadge>
        <x-view.badge nvalue="10">Notification</x-view.badge>
    </div>
    <div class="dark bg-slate-800 m-2 p-2">
        <x-view.alert type='info'><x-slot name="title">Alert</x-slot> Please beinform </x-view.alert>
        <x-view.alert type='warning'><x-slot name="title">Alert</x-slot> Please beinform</x-view.alert>
        <x-view.alert type='danger'><x-slot name="title">Alert</x-slot> Please beinform</x-view.alert>
        <x-view.alert type='success'><x-slot name="title">Alert</x-slot> Please beinform</x-view.alert>
    </div>
    <div class="m-2 p-2 bg-blue-100">
        <x-view.alert type='info'><x-slot name="title">Alert</x-slot> Please beinform</x-view.alert>
        <x-view.alert type='warning'><x-slot name="title">Alert</x-slot> Please beinform</x-view.alert>
        <x-view.alert type='danger'><x-slot name="title">Alert</x-slot> Please beinform</x-view.alert>
        <x-view.alert type='success'><x-slot name="title">Alert</x-slot> Please beinform</x-view.alert>
    </div>
    <div class="m-2 p-2 ">
        <x-view.toast type='info'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view<br>New Toast Message view
        </x-view.toast>
        <x-view.toast type='danger'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-view.toast>
        <x-view.toast type='success'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-view.toast>
        <x-view.toast type='warning'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-view.toast>
    </div>
    <div class="dark m-2 p-2 bg-slate-800">
        <x-view.toast type='info'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-view.toast>
        <x-view.toast type='danger'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-view.toast>
        <x-view.toast type='success'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-view.toast>
        <x-view.toast type='warning'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-view.toast>
    </div>
    <x-form method="POST" class="m-2 p-2 bg-blue-50">
        <x-form.group id="group_inp0" >
            <x-form.group.input type="file"></x-form.group.input>
            <x-form.group.button>Upload</x-form.group.button>
        </x-form.group>
        <x-form.group id="group_inp10" >
            <x-form.group.button>Upload</x-form.group.button>
            <x-form.group.textarea></x-form.group.textarea>
        </x-form.group>
        <x-form.group id="group_inp1" >
            <x-form.group.label>Group label</x-form.group.label>
            <x-form.group.input></x-form.group.input>
            <x-form.group.button>Add</x-form.group.button>
        </x-form.group>
        <x-form.group class="gap-1">
            <x-form.group id="group_inp2">
                <x-form.group.radio>Radio label</x-form.group.radio>
            </x-form.group>
            <x-form.group id="group_inp2">
                <x-form.group.radio>Radio label</x-form.group.radio>
            </x-form.group>
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
            <x-form.group.spin></x-form.group.spin>
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
    </x-form>
</body>
</html>