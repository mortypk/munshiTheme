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
        <x-theme.form.label>Name</x-theme.form.label>
        <x-theme.form.input>Light Submit</x-theme.form.input>
        <div class="flex items-center gap-1">
            <x-theme.form.radio name="gender" /> Male
            <x-theme.form.radio name="gender" /> Female
        </div>
        <x-theme.form.select>
            <x-theme.form.option value="1">Select List</x-theme.form.option>
            <x-theme.form.option value="1" >Select List</x-theme.form.option>
        </x-theme.form.select>
        <div class="flex items-center gap-1">
            <x-theme.form.checkbox></x-theme.form.checkbox> Subscribe
        </div>
        <div>
            <x-theme.form.textarea></x-theme.form.textarea>
        </div>
        <div class="flex gap-1 items-center">
            <x-theme.form.button-cancel>Cancel</x-theme.form.button>
            <x-theme.form.button-submit >Light Submit</x-theme.form.button>
        </div>
        <div class="flex gap-1 items-center">
            <x-theme.form.chip img="https://i.pravatar.cc/48?img=1">New</x-theme.form.chip>
            <x-theme.form.chip>New 2</x-theme.form.chip>
            <x-theme.form.chip>New 3 </x-theme.form.chip>
        </div>
        <x-theme.form.spin></x-theme.form.spin>
    </div> --}}

    <x-theme.nav.bar class="mb-1">
        <x-theme.nav.logo>Munshi</x-theme.nav.logo>
        <x-theme.nav.link>Home</x-theme.nav.link>
        <x-theme.nav.link>About</x-theme.nav.link>
        <x-theme.nav.link>Contact</x-theme.nav.link>
        <x-theme.nav.dropdown copation="Product">
            <x-theme.nav.dropdown.link>Dress</x-theme.nav.dropdown.link>
            <x-theme.nav.dropdown.link>Food</x-theme.nav.dropdown.link>
            <x-theme.nav.dropdown.link>Electronic</x-theme.nav.dropdown.link>
        </x-theme.nav.dropdown>
        <div class="flex-grow"></div>
        <x-theme.nav.link>Login</x-theme.nav.link>
    </x-theme.nav.bar>
    <x-theme.card>
        <x-theme.card.body>
                <x-theme.table>
                    <x-theme.table.thead>
                        <th>#</th>
                        <th>Item Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th></th>
                    </x-theme.table.thead>
                    <x-theme.table.tbody>
                        @for ($i = 0; $i < 10; $i++)
                        <x-theme.table.tr>
                            <td class="p-1">{{ $i }}</td>
                            <td class="p-1">Morty</td>
                            <td class="p-1">M Younus pk</td>
                            <td class="p-1">100.0</td>
                            <td class="p-1">
                                <x-theme.form.button class="py-0">Show</x-theme.form.button>
                                <x-theme.form.button-cancel class="py-0">Delete</x-theme.form.button-cancel>
                            </td>
                        </x-theme.table.tr>
                        @endfor
                    </x-theme.table.tbody>
                </x-theme.table>
        </x-theme.card.body>
    </x-theme.card>
    <div class="p-2 bg-slate-800">
        <x-theme.tabs>
            <x-theme.tab.links>
                <x-theme.tab.link tab="1">Home</x-theme.tab.link>
                <x-theme.tab.link tab="2">About</x-theme.tab.link>
                <x-theme.tab.link tab="3">Contact</x-theme.tab.link>
            </x-theme.tab.links>
            <x-theme.tab.content tab="1">
                Tab 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore accusamus velit fugit delectus eum nostrum eaque similique harum itaque? Quaerat porro vitae voluptatem ipsam quia quae reiciendis mollitia ullam sequi.
                Tab 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore accusamus velit fugit delectus eum nostrum eaque similique harum itaque? Quaerat porro vitae voluptatem ipsam quia quae reiciendis mollitia ullam sequi.
                Tab 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore accusamus velit fugit delectus eum nostrum eaque similique harum itaque? Quaerat porro vitae voluptatem ipsam quia quae reiciendis mollitia ullam sequi.
                Tab 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore accusamus velit fugit delectus eum nostrum eaque similique harum itaque? Quaerat porro vitae voluptatem ipsam quia quae reiciendis mollitia ullam sequi.
            </x-theme.tab.content>
            <x-theme.tab.content tab="2">
                Tab 2 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore accusamus velit fugit delectus eum nostrum eaque similique harum itaque? Quaerat porro vitae voluptatem ipsam quia quae reiciendis mollitia ullam sequi.
            </x-theme.tab.content>
            <x-theme.tab.content tab="3">
                Tab 3 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore accusamus velit fugit delectus eum nostrum eaque similique harum itaque? Quaerat porro vitae voluptatem ipsam quia quae reiciendis mollitia ullam sequi.
            </x-theme.tab.content>
        </x-theme.tabs>
    </div>
    <div class="p-2">
        <x-theme.modal modalID="newModal">
            <x-theme.modal.header>This is title</x-theme.modal.header>
            <x-theme.modal.body>This is body</x-theme.modal.body>
            <x-theme.modal.footer>
                <x-theme.form.button>OK</x-theme.form.button>
                <x-theme.form.button-submit>Submit</x-theme.form.button-submit>
            </x-theme.modal.footer>
        </x-theme.modal>
    </div>
    <x-theme.form.button x-data="" x-on:click="$dispatch('modal','newModal')">Open Modal</x-theme.form.button>
    {{--  --}}
    <div class="p-2">
        <x-theme.card>
            <x-theme.card.body>
                <x-theme.card.heading>Card heading</x-theme.card.heading>
                <x-theme.card.bodytext>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt animi voluptatibus, repudiandae, reiciendis nisi dolores nihil explicabo voluptatum dolore suscipit iusto voluptas minima mollitia assumenda possimus debitis ullam fuga repellendus.
                </x-theme.card.bodytext>
            </x-theme.card.body>
        </x-theme.card>
        <x-theme.card>
            <x-theme.card.header>Card Header</x-theme.card.header>
            <x-theme.card.body>
                <x-theme.card.bodytext>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt animi voluptatibus, repudiandae, reiciendis nisi dolores nihil explicabo voluptatum dolore suscipit iusto voluptas minima mollitia assumenda possimus debitis ullam fuga repellendus.
                </x-theme.card.bodytext>
            </x-theme.card.body>
        </x-theme.card>
        <x-theme.card>
            <x-theme.card.header>Card Header</x-theme.card.header>
            <x-theme.card.body>
                <x-theme.card.heading>Card heading</x-theme.card.heading>
                <x-theme.card.bodytext>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt animi voluptatibus, repudiandae, reiciendis nisi dolores nihil explicabo voluptatum dolore suscipit iusto voluptas minima mollitia assumenda possimus debitis ullam fuga repellendus.
                </x-theme.card.bodytext>
            </x-theme.card.body>
            <x-theme.card.footer>Card Footer</x-theme.card.footer>
        </x-theme.card>
    </div>
    <div class="dark p-2">
        <x-theme.card>
            <x-theme.card.header>Card with Dark Class Header</x-theme.card.header>
            <x-theme.card.body>
                <x-theme.card.heading>Card heading</x-theme.card.heading>
                <x-theme.card.bodytext>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt animi voluptatibus, repudiandae, reiciendis nisi dolores nihil explicabo voluptatum dolore suscipit iusto voluptas minima mollitia assumenda possimus debitis ullam fuga repellendus.
                </x-theme.card.bodytext>
            </x-theme.card.body>
            <x-theme.card.footer>Card Footer</x-theme.card.footer>
        </x-theme.card>`
    </div>

    <div class="dark bg-slate-800 m-2 p-2 mx-auto flex flex-wrap gap-1">
        <x-theme.gallery>
            @for ($i =0; $i < 5; $i++)
            <x-theme.gallery.img  src='https://picsum.photos/seed/{{ $i }}/200/300'>
                Nice view
            </x-theme.gallery.img>
            @endfor
        </x-theme.gallery>
    </div>
    <div class="m-2 p-2 mx-auto flex flex-wrap gap-1">
        <x-theme.gallery>
            @for ($i =0; $i < 5; $i++)
            <x-theme.gallery.img  src='https://picsum.photos/seed/{{ $i }}/200/300'>
                Nice view
            </x-theme.gallery.img>
            @endfor
        </x-theme.gallery>
    </div>
    <div class="dark bg-slate-800 m-2 p-2 mx-auto flex flex-wrap gap-1">
        <x-theme.icon.textlink href="?{{ 1 }}" class="w-96">
            Long {{ 1 }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod minus, beatae numquam commodi explicabo architecto veniam, odio quo, aliquid labore cum est! Perferendis inventore quas saepe autem, ipsam sunt ex?
        </x-theme.icon.textlink>
        <x-theme.icon.textlink href="?{{ 1 }}" class="w-96">
            {{ 2 }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod minus, beatae numquam commodi explicabo architecto veniam, odio quo, aliquid labore cum est! Perferendis inventore quas saepe autem, ipsam sunt ex?
        </x-theme.icon.textlink>
    </div>
    <div class="dark">
        <x-theme.icons>
            @for ($i = 0; $i < 5; $i++)
            <x-theme.icon.img img="https://icons.iconarchive.com/icons/aha-soft/free-game/64/Bank-icon.png">
                Bank Note
            </x-theme.icon.img>
            @endfor
        </x-theme.icons>
    </div>
    <div >
        <x-theme.icons>
            @for ($i = 10; $i < 15; $i++)
            <x-theme.icon.img img="https://i.pravatar.cc/48?img={{ $i }}">
                Google Avatar
            </x-theme.icon.img>
            @endfor
        </x-theme.icons>
    </div>
    <div class="m-2 p-2 flex flex-col gap-1 bg-blue-100">
        <x-theme.icon.img  img="https://i.pravatar.cc/48?img=1">
            Google
        </x-theme.icon.img>
        <x-theme.icon.textlink href="?{{ 1 }}">
            {{ 1 }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod minus, beatae numquam commodi explicabo architecto veniam, odio quo, aliquid labore cum est! Perferendis inventore quas saepe autem, ipsam sunt ex?
        </x-theme.icon.textlink>
    </div>
    <div class="dark bg-slate-800 m-2 p-2 flex flex-col gap-1">
        <x-theme.superbadge nvalue="70">Notification</x-theme.superbadge>
        <x-theme.badge nvalue="10">Notification</x-theme.badge>
    </div>
    <div class="m-2 p-2 flex flex-col gap-1 bg-blue-100">
        <x-theme.superbadge nvalue="70">Notification</x-theme.superbadge>
        <x-theme.badge nvalue="10">Notification</x-theme.badge>
    </div>
    <div class="dark bg-slate-800 m-2 p-2">
        <x-theme.alert type='info'><x-slot name="title">Alert</x-slot> Please beinform </x-theme.alert>
        <x-theme.alert type='warning'><x-slot name="title">Alert</x-slot> Please beinform</x-theme.alert>
        <x-theme.alert type='danger'><x-slot name="title">Alert</x-slot> Please beinform</x-theme.alert>
        <x-theme.alert type='success'><x-slot name="title">Alert</x-slot> Please beinform</x-theme.alert>
    </div>
    <div class="m-2 p-2 bg-blue-100">
        <x-theme.alert type='info'><x-slot name="title">Alert</x-slot> Please beinform</x-theme.alert>
        <x-theme.alert type='warning'><x-slot name="title">Alert</x-slot> Please beinform</x-theme.alert>
        <x-theme.alert type='danger'><x-slot name="title">Alert</x-slot> Please beinform</x-theme.alert>
        <x-theme.alert type='success'><x-slot name="title">Alert</x-slot> Please beinform</x-theme.alert>
    </div>
    <div class="m-2 p-2 ">
        <x-theme.toast type='info'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view<br>New Toast Message view
        </x-theme.toast>
        <x-theme.toast type='danger'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-theme.toast>
        <x-theme.toast type='success'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-theme.toast>
        <x-theme.toast type='warning'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-theme.toast>
    </div>
    <div class="dark m-2 p-2 bg-slate-800">
        <x-theme.toast type='info'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-theme.toast>
        <x-theme.toast type='danger'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-theme.toast>
        <x-theme.toast type='success'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-theme.toast>
        <x-theme.toast type='warning'>
            <x-slot name='title'>Toast Heading</x-slot>
            New Toast Message view
        </x-theme.toast>
    </div>
    <x-theme.form method="POST" class="m-2 p-2 bg-blue-50">
        <x-theme.layout.flex col>
            <x-theme.form.group id="group_inp0" >
                <x-theme.form.group.input type="file"></x-theme.form.group.input>
                <x-theme.form.group.button>Upload</x-theme.form.group.button>
            </x-theme.form.group>
            <x-theme.form.group id="group_inp10" >
                <x-theme.form.group.button>Upload</x-theme.form.group.button>
                <x-theme.form.group.textarea></x-theme.form.group.textarea>
            </x-theme.form.group>
            <x-theme.form.group id="group_inp1" >
                <x-theme.form.group.label>Group label</x-theme.form.group.label>
                <x-theme.form.group.input></x-theme.form.group.input>
                <x-theme.form.group.button>Add</x-theme.form.group.button>
            </x-theme.form.group>
            <x-theme.form.group class="gap-1">
                <x-theme.form.group id="group_inp2">
                    <x-theme.form.group.radio>Radio label</x-theme.form.group.radio>
                </x-theme.form.group>
                <x-theme.form.group id="group_inp2">
                    <x-theme.form.group.radio>Radio label</x-theme.form.group.radio>
                </x-theme.form.group>
            </x-theme.form.group>
            <x-theme.form.group id="group_inp3">
                <x-theme.form.group.checkbox>checkbox label</x-theme.form.group.checkbox>
            </x-theme.form.group>
            <x-theme.form.group id="group_inp4">
                <x-theme.form.group.label>Select label</x-theme.form.group.label>
                <x-theme.form.group.select>
                    <x-theme.form.group.option>One</x-theme.form.group.option>
                    <x-theme.form.group.option>Two</x-theme.form.group.option>
                </x-theme.form.group.select>
                <x-theme.form.group.spin></x-theme.form.group.spin>
            </x-theme.form.group>
            <x-theme.form.label>Name</x-theme.form.label>
            <x-theme.form.input>Light Submit</x-theme.form.input>
            <div class="flex items-center gap-1">
                <x-theme.form.radio name="gender" /> Male
                <x-theme.form.radio name="gender" /> Female
            </div>
            <x-theme.form.select>
                <x-theme.form.option value="1">Select List</x-theme.form.option>
                <x-theme.form.option value="1" >Select List</x-theme.form.option>
            </x-theme.form.select>
            <div class="flex items-center gap-1">
                <x-theme.form.checkbox></x-theme.form.checkbox> Subscribe
            </div>
            <div>
                <x-theme.form.textarea></x-theme.form.textarea>
            </div>
            <div class="flex gap-1 items-center">
                <x-theme.form.button-cancel>Cancel</x-theme.form.button>
                <x-theme.form.button-submit >Light Submit</x-theme.form.button>
            </div>
            <div class="flex gap-1 items-center">
                <x-theme.form.chip img="https://i.pravatar.cc/48?img=1">New</x-theme.form.chip>
                <x-theme.form.chip>New 2</x-theme.form.chip>
                <x-theme.form.chip>New 3 </x-theme.form.chip>
            </div>
            <x-theme.form.spin></x-theme.form.spin>
        </x-theme.layout.flex>
    </x-theme.form>
</body>
</html>