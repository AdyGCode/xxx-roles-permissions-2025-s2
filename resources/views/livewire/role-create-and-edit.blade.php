<div class="space-y-4 bg-gray-50 p-4 rounded">
    <!-- Role Name -->
    <div>
        <label class="block font-bold mb-1">Role Name</label>
        <input type="text" wire:model="roleName" class="border p-2 w-full">

    @error('roleName')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
    </div>

    <!-- Search Filter -->
    <div>
        <input type="text" wire:model="search" placeholder="Search permissions..." class="border p-2 w-full">
    </div>

    <div class="flex space-x-8">
        <!-- Available Permissions -->
        <div class="w-1/2 border p-4">
            <h3 class="font-bold mb-2">Available Permissions</h3>
            <ul class="grid grid-cols-3 gap-2">
                @foreach($filteredPermissions as $permission)
                    <li class="cursor-pointer border border-gray-300 rounded hover:bg-gray-200 bg-gray-50 p-1 "
                        wire:click="selectPermission('{{ $permission }}')"
                    >
                        {{ $permission }}
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Selected Permissions -->
        <div class="w-1/2 border p-4">
            <h3 class="font-bold mb-2">Selected Permissions</h3>
            <ul class="grid grid-cols-3 gap-2">
                @foreach($selectedPermissions as $key => $permission)
                    <li class="cursor-pointer border border-gray-300 rounded bg-green-100 hover:bg-gray-200 p-1"
                        wire:click="removePermission('{{ $permission }}')"
                    >
                        {{ $permission }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Save Button -->
    <div>

        <x-primary-button wire:click="saveRole">
            <i class="fa-solid fa-save pr-4"></i>
            {{ $roleId ? __('Update Changes') : __('Save') }}
        </x-primary-button>

        <x-primary-link-button href="{{route('admin.roles.index')}}">
            <i class="fa-solid fa-cancel pr-4"></i>
            {{ __('Cancel') }}
        </x-primary-link-button>

    </div>

</div>
