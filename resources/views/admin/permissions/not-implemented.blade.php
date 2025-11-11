<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Admin Zone') }}
        </h2>
    </x-slot>

    <section class="py-12 mx-12 space-y-4">

        <header>
            <h3 class="text-2xl font-bold text-zinc-700">
                {{__('Permissions')}}
            </h3>
        </header>

        <div class="flex flex-1 w-full max-h-min overflow-x-auto">
            <p class="text-xl">The {{ $actionName }} action is not implemented</p>
        </div>

        <div class="flex flex-1 w-full max-h-min overflow-x-auto">
            <x-link-button href="{{ route('admin.permissions.index') }}">Back to Permissions</x-link-button>
        </div>
    </section>


</x-admin-layout>
