<?php

namespace App\Livewire;

use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleCreateAndEdit extends Component
{

    public ?int $roleId = null; // null for create, set for edit
    public string $roleName = '';
    public array $availablePermissions = [];
    public array $selectedPermissions = [];
    public string $search = '';


    public function mount(?int $roleId = null): void
    {
        $this->roleId = $roleId;
        $this->availablePermissions = Permission::pluck('name')->toArray();

        if ($roleId) {
            $role = Role::findOrFail($roleId);
            $this->roleName = $role->name;
            $this->selectedPermissions = $role->permissions->pluck('name')->toArray();
            $this->availablePermissions = array_diff($this->availablePermissions, $this->selectedPermissions);
        }
    }

    public function selectPermission($permission): void
    {
        $this->selectedPermissions[] = $permission;
        $this->availablePermissions = array_diff($this->availablePermissions, [$permission]);
    }

    public function removePermission($permission): void
    {
        $this->availablePermissions[] = $permission;
        $this->selectedPermissions = array_diff($this->selectedPermissions, [$permission]);
    }

    public function saveRole()
    {
        $normalizedName = Str::kebab($this->roleName);

        $this->validate([
            'roleName' => [
                'required',
                'min:5',
                'max:64',
                Rule::unique('roles', 'name')
                    ->ignore($this->roleId)
                    ->where(function ($query) use ($normalizedName) {
                        return $query->where('name', $normalizedName);
                    })

            ]
        ]);

        try {
            $role = $this->roleId
                ? Role::findOrFail($this->roleId)
                : Role::create(['name' => $this->roleName]);

            $role->name = $normalizedName;
            $role->save();
            $role->syncPermissions($this->selectedPermissions);

            $msg = $this->roleId ? 'updated' : 'created';
            $roleName = $role->name;

            flash()->success("Role $roleName $msg successfully!",
                [
                    'position' => 'top-center',
                    'timeout' => 5000,
                ],
                "Role ".Str::title($msg));

            return to_route('admin.roles.index');

        } catch (ValidationException $e) {
            flash()->error('Please fix the errors in the form.',
                [
                    'position' => 'top-center',
                    'timeout' => 5000,
                ],
                'Role Creation Failed');
            return null;
        }
    }


    public function render(): View
    {

        $filteredPermissions = array_filter($this->availablePermissions, function ($permission) {
            return stripos($permission, $this->search) !== false;
        });

        return view('livewire.role-create-and-edit', [
            'filteredPermissions' => $filteredPermissions,
        ]);

    }
}
