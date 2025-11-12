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
                   <i class="fa-solid fa-arrow-right text-zinc-400"></i> {{ __("Create New Role") }}
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

        <form action="{{ route('admin.roles.store') }}"
              method="POST"
              class="p-6 flex flex-col space-y-4">

            @csrf

            <x-input-label
                for="name"
                :value="__('Role Name')"/>

            <x-text-input name="name" id="Name"
                          placeholder="{{ __('New role name') }}?"
                          :message="old('name')"
                          :value="old('name')"
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

    </section>


</x-admin-layout>
