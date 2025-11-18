<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                    <div>
                        <img alt="image: Roles & Permissions Banner"
                             src="{{ asset('storage/Roles-and-Permissions.svg') }}"
                             class="aspect-video rounded-lg object-fill bg-black">

                        <div class="mt-4">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg/tight font-semibold text-gray-900">
                                        {{ $user->name }}
                                    </h3>

                                </div>
                            </div>

                            <div class="mt-2 text-pretty text-gray-700 flex flex-row flex-wrap gap-4">
                                @forelse($roles as $role)
                                    <x-role-pill :role="$role"/>
                                @empty
                                    <x-role-pill :role="__('No Roles')"/>
                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
