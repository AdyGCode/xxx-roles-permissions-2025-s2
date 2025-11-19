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
                   <i class="fa-solid fa-arrow-right text-zinc-400"></i>
                    {{ __("Create New Role") }}
                </span>
            </h3>

            <a href="{{ route('admin.roles.index') }}"
               class="hover:bg-zinc-500 hover:text-white transition border p-2 text-center rounded">
                <i class="fa-solid fa-users"></i>
                All Roles
            </a>

            @can('create-role')
                <a href="{{ route('admin.roles.create') }}"
                   class="hover:bg-blue-500 hover:text-white transition border p-2 text-center rounded">
                    <i class="fa-solid fa-user-plus"></i>
                    New Role
                </a>
            @endcan
        </header>


        @error('roleName')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        @livewire('role-create-and-edit')
        {{-- Pass roleId for edit mode --}}


    </section>


</x-admin-layout>
