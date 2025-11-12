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
                   <i class="fa-solid fa-arrow-right text-zinc-400"></i> {{ __("Edit Role") }}
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

        <form action="{{ route('admin.roles.update', $role) }}"
              method="POST"
              class="p-6 flex flex-col space-y-4">

            @csrf
            @method('PATCH')

            <x-input-label
                for="name"
                :value="__('Role Name')"/>

            <x-text-input name="name" id="Name"
                          placeholder="{{ __('New role name') }}?"
                          :message="old('name')"
                          :value="old('name')??$role->name"
            />

            <x-input-error :messages="$errors->get('name')" class="mt-2" rows="10"/>

            <div class="flex flex-row space-x-4">

                <x-primary-button>
                    <i class="fa-solid fa-save pr-4"></i>
                    Save
                </x-primary-button>

                <x-primary-link-button href="{{route('admin.roles.index')}}">
                    <i class="fa-solid fa-cancel pr-4"></i>
                    Cancel
                </x-primary-link-button>

            </div>

        </form>

        <section class="grid grid-cols-2 space-y-2 mt-4 px-6  space-x-8">
            <div class="-mx-6 bg-gray-100 col-span-2 px-6 pb-2">
                <h3 class="-mx-6 px-6 py-2 text-lg font-semibold col-span-2 bg-gray-100">
                    Current Permissions
                </h3>
                <div class="flex flex-row gap-1 flex-wrap pb-2">
                    @forelse($rolePermissions as $rolePermission)
                        <p class="text-xs bg-gray-700 text-gray-100 p-1 px-2 rounded-full whitespace-nowrap">
                            {{ $rolePermission->name }}
                        </p>
                    @empty
                        <p class="text-gray-600 text-sm">
                            No Permissions
                        </p>
                    @endforelse
                </div>
            </div>
        </section>

        <div class="mt-2 mb-6 bg-gray-100 shadow border border-gray-300 rounded p-4 pt-2">

            <h3 class="mb-2 bg-gray-300 text-gray-800 px-4 py-1 -mt-2 -mx-4">
                Add Permissions
            </h3>

            <form method="POST"
                  action="{{ route('admin.roles.permissions', $role->id) }}">
                @csrf

                <div class="sm:col-span-6">

                    <x-input-label
                        for="permission"
                        :value="__('Permission')"/>

                    <select
                        id="permission"
                        name="permission"
                        autocomplete="permission-name"
                        class="mt-1 mb-4 block w-full py-1 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                        @foreach ($permissions as $permission)
                            <option value="{{ $permission->name }}">
                                {{ $permission->name }}
                            </option>
                        @endforeach

                    </select>

                    <x-input-error
                        :messages="$errors->get('permission')"
                        class="mt-2"/>
                </div>

                <x-primary-button
                    class="bg-green-600 hover:bg-green-500 text-white"
                    type="submit">
                    Assign
                </x-primary-button>
            </form>
        </div>

    </section>


</x-admin-layout>
