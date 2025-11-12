<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Admin Zone') }}
        </h2>
    </x-slot>

    <section class="py-12 mx-12 space-y-4">

        <header class="flex justify-between gap-4">

            <h3 class="text-2xl font-bold text-zinc-700 grow">
                <a href="{{ route('admin.roles.index') }}" class="hover:text-zinc-500">
                    <i class="fa-solid fa-user-shield pr-2"></i>
                    {{__('Roles')}}
                </a>
            </h3>
@can('create-role')
            <a href="{{ route('admin.roles.create') }}"
               class="hover:bg-blue-500 hover:text-white transition border p-2 text-center rounded">
                <i class="fa-solid fa-user-plus"></i>
                New Role
            </a>
@endcan
        </header>

        <div class="flex flex-1 w-full max-h-min overflow-x-auto">
            <table class="min-w-full divide-y-2 divide-gray-200 bg-gray-50">
                <thead class="sticky top-0 bg-zinc-700 ltr:text-left rtl:text-right">
                <tr class="*:font-medium *:text-white">
                    <th class="px-3 py-2 whitespace-nowrap">Role</th>
                    <th class="px-3 py-2 whitespace-nowrap">Permissions</th>
                    <th class="px-3 py-2 whitespace-nowrap">Protecting</th>
                    <th class="px-3 py-2 whitespace-nowrap">Actions</th>
                </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                @foreach($roles as $role)

                    <tr class="*:text-gray-900 *:first:font-medium hover:bg-white">
                        <td class="px-3 py-1 whitespace-nowrap min-w-1/3">
                            <span class="">{{ $role->name }}</span>
                        </td>

                        <td class="px-3 py-1 whitespace-nowrap w-auto">
                            {{ $role->permissions()->get()->count() }}
                        </td>

                        <td class="px-3 py-1 whitespace-nowrap w-auto">
                            <span class="text-xs rounded-full bg-gray-700 p-0.5 px-2 text-gray-200">
                                    {{ $role->guard_name }}
                                </span>
                        </td>

                        <td class="px-3 py-1 whitespace-nowrap flex gap-2 w-full">

                            @can('read-role')
                            <a href="{{ route('admin.roles.show', $role) }}"
                               class="hover:text-green-500 transition border p-2 text-center rounded">
                                <i class="fa-solid fa-user-tag"></i>
                            </a>
                            @endcan

                            @can('edit-role')
                                <a href="{{ route('admin.roles.edit', $role) }}"
                                   class="hover:text-blue-500 transition border p-2 text-center rounded">
                                    <i class="fa-solid fa-user-cog"></i>
                                </a>
                            @endcan

                            @can('delete-role')
                                <a href="{{ route('admin.roles.delete', $role) }}"
                                   class="hover:text-red-500 transition border p-2 text-center rounded">
                                    <i class="fa-solid fa-user-slash"></i>
                                </a>
                            @endcan
                        </td>

                    </tr>
                @endforeach

                </tbody>

                <tfoot>
                <tr>
                    <td colspan="4" class="p-3">
                        @if($roles->hasPages())
                            {{ $roles->onEachSide(2)->links("vendor.pagination.tailwind") }}
                        @else
                            @if ($roles->total())
                                {{ __('Showing all roles') }}
                            @else
                                {{ __('No roles to show') }}
                            @endif
                        @endif
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </section>


</x-admin-layout>
