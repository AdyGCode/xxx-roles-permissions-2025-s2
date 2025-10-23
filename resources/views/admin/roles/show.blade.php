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
                   <i class="fa-solid fa-arrow-right text-zinc-400"></i> {{ __("Role Details") }}
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

        <footer class="flex flex-row space-x-4">

            <x-link-button href="{{route('admin.roles.index')}}">
                <i class="fa-solid fa-users"></i> &nbsp;
                All Roles
            </x-link-button>

            <x-link-button href="{{route('admin.roles.edit', $role)}}">
                <i class="fa-solid fa-save"></i> &nbsp;
                Edit
            </x-link-button>

        </footer>

    </section>


</x-admin-layout>
