<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Admin Zone') }}
        </h2>
    </x-slot>

    <section class="py-12 mx-12 space-y-4">

        <header class="flex justify-between gap-4">

            <h3 class="text-2xl font-bold text-zinc-700 grow">
                <a href="{{ route('admin.roles.index') }}"
                   class="hover:text-zinc-500">
                    {{__('Roles')}}
                </a>
                <span class="text-zinc-500 font-normal">
                   <i class="fa-solid fa-arrow-right text-zinc-400"></i> {{ __("Role Deletion Confirmation") }}
                </span>
            </h3>

            <a href="{{ route('admin.roles.index') }}"
               class="hover:bg-zinc-500 hover:text-white transition border p-2 text-center rounded">
                <i class="fa-solid fa-users"></i>
                All Roles
            </a>

            <a href="{{ route('admin.roles.create') }}"
               class="hover:bg-blue-500 hover:text-white transition border p-2 text-center rounded">
                <i class="fa-solid fa-user-plus"></i>
                New Role
            </a>
        </header>

        <form action="{{ route('admin.roles.destroy', $role) }}"
              method="POST"
              class="p-6 flex flex-col gap-4">

            @csrf
            @method('DELETE')

            <table class="table w-full mt-4 space-y-1 text-neutral-700">
                <tr>
                    <th class="w-1/6 border-b text-left border-b-neutral-200 p-1">Name</th>
                    <td class="w-5/6 border-b border-b-neutral-200 p-1">{{ $role->name }}</td>
                </tr>

                <tr>
                    <th class="w-1/6 text-left border-b border-b-neutral-200 p-1">Created</th>
                    <td class="w-5/6 border-b border-b-neutral-200 p-1">{{ $role->created_at }}</td>
                </tr>

                <tr>
                    <th class="w-1/6 text-left! border-b border-b-neutral-200 p-1">Last Updated</th>
                    <td class="w-5/6 border-b border-b-neutral-200 p-1">{{ $role->updated_at }}</td>
                </tr>

                <tr>
                    <th class="w-1/6 text-left! border-b border-b-neutral-200 p-1">Permissions</th>
                    <td class="w-5/6 border-b border-b-neutral-200 p-1 flex flex-wrap gap-1 min-h-8">

                        @forelse($role->permissions as $permission)
                            <span class="inline-block rounded-full bg-neutral-500 text-black">
                        {{ $permission->name }}
                        </span>
                        @empty
                            No permissions defined
                        @endforelse
                    </td>
                </tr>
            </table>


            <div class="p-4 border border-red-300 rounded bg-red-500/5">

                <label
                    for="name"
                    class=" block mb-2"
                >
                    {{ __('Please confirm you wish to delete the role') }}
                    <code class="text-red-500 font-semibold text-lg ">{{$role->name}}</code>
                    {{ __('by entering it below') }}:
                </label>

                <x-text-input
                    name="name"
                    id="Name"
                    class="w-full bg-gray-100 placeholder:text-neutral-400"
                    placeholder="{{ __('Role name') }}"
                />

                <x-input-error :messages="$errors->get('name')" class="mt-2" rows="10"/>

            </div>

            <footer class="flex flex-row space-x-4">

                <x-primary-button
                class="hover:bg-red-500! hover:text-white!">
                    <i class="fa-solid fa-user-slash"></i> &nbsp;
                    Delete
                </x-primary-button>

                <x-link-button href="{{route('admin.roles.index')}}"
                    class="hover:bg-blue-500! hover:text-white!">
                    <i class="fa-solid fa-cancel"></i> &nbsp;
                    Cancel
                </x-link-button>

            </footer>
        </form>

    </section>

</x-admin-layout>
