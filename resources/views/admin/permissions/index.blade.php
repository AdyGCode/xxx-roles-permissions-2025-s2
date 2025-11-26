<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Admin Zone') }}
        </h2>
    </x-slot>

    <section class="py-12 mx-12 space-y-4">

        <header class="flex justify-between gap-4">
            <h3 class="text-2xl font-bold text-zinc-700">
                <a href="{{ route('admin.permissions.index') }}" class="hover:text-zinc-500">
                    <i class="fa-solid fa-file-shield pr-2"></i>
                    {{__('Permissions')}}
                </a>
            </h3>


            <form action="{{ route('admin.permissions.index') }}" method="GET">
                <x-text-input id="Search" name="search" value="{{ old('search') ?? $search }}"></x-text-input>
                <x-primary-button type="submit">Search</x-primary-button>
                <x-secondary-link-button href="{{ route('admin.permissions.index') }}">Show All
                </x-secondary-link-button>
            </form>

            <a href="{{ route('admin.roles.index') }}"
               class="hover:bg-blue-500 hover:text-white transition border p-2 text-center rounded">
                <i class="fa-solid fa-user-shield"></i>
                Back to Roles
            </a>
        </header>

        <div class="flex flex-1 w-full max-h-min overflow-x-auto">
            <table class="min-w-full divide-y-2 divide-gray-200 bg-gray-50">
                <thead class="sticky top-0 bg-zinc-700 ltr:text-left rtl:text-right">
                <tr class="*:font-medium *:text-white">
                    <th class="px-3 py-2 whitespace-nowrap">Permission</th>
                    <th class="px-3 py-2 whitespace-nowrap">Protecting</th>
                    <th class="px-3 py-2 whitespace-nowrap">Actions</th>
                </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                @foreach($permissions as $permission)

                    <tr class="*:text-gray-900 *:first:font-medium hover:bg-white">
                        <td class="px-3 py-1 whitespace-nowrap min-w-1/3">
                            <span class="">{{ $permission->name }}</span>
                        </td>

                        <td class="px-3 py-1 whitespace-nowrap w-auto">
                            <span class="text-xs rounded-full bg-gray-700 p-0.5 px-2 text-gray-200">
                                <span class="">{{ $permission->guard_name }}</span>
                            </span>
                        </td>

                        <td class="px-3 py-1 whitespace-nowrap w-1/8">

                            {{--                            <form action="{{ route('admin.permissions.index', $permission) }}"--}}
                            {{--                                  method="post"--}}
                            {{--                                  class="grid grid-cols-3 gap-2 w-full">--}}
                            {{--                                @csrf--}}
                            {{--                                @method('delete')--}}
                            {{--                                --}}
                            {{--                                @can('show-permission')--}}
                            {{--                                    <a href="{{ route('admin.permissions.show', $permission) }}"--}}
                            {{--                                       class="hover:text-green-500 transition border p-2 text-center rounded">--}}
                            {{--                                        <i class="fa-solid fa-user-tag"></i>--}}
                            {{--                                    </a>--}}
                            {{--                                @endcan--}}

                            {{--                                @can('permission-edit')--}}
                            {{--                                    <a href="{{ route('admin.permissions.edit', $permission) }}"--}}
                            {{--                                       class="hover:text-blue-500 transition border p-2 text-center rounded">--}}
                            {{--                                        <i class="fa-solid fa-user-cog"></i>--}}
                            {{--                                    </a>--}}
                            {{--                                @endcan--}}

                            {{--                                @can('permission-delete')--}}
                            {{--                                    <button type="submit"--}}
                            {{--                                            class="hover:text-red-500 transition border p-2 text-center rounded">--}}
                            {{--                                        <i class="fa-solid fa-user-slash"></i>--}}
                            {{--                                    </button>--}}
                            {{--                                @endcan--}}

                            {{--                            </form>--}}

                            No actions available
                        </td>

                    </tr>
                @endforeach

                </tbody>

                <tfoot>
                <tr>
                    <td colspan="4" class="p-3">
                        @if($permissions->hasPages())
                            {{ $permissions->onEachSide(2)->links("vendor.pagination.tailwind") }}
                        @else
                            @if ($permissions->total())
                                {{ __('Showing all permissions') }}
                            @else
                                {{ __('No permissions to show') }}
                            @endif
                        @endif
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </section>


</x-admin-layout>
