<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Exceptions\RoleAlreadyExists;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use Flasher\Prime\FlasherInterface;

class RoleManagementController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            new Middleware('permission:browse-role|read-role|edit-role|add-role|delete-role', only: ['index', 'show',]),
            new Middleware('permission:add-role', only: ['create', 'store', 'givePermission']),
            new Middleware('permission:edit-role', only: ['edit', 'update', 'givePermission']),
            new Middleware('permission:delete-role', only: ['delete', 'destroy',]),
        ];
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::with('permissions')->paginate(10);
        return view('admin.roles.index')
            ->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {

            $validated = $request->validate([
                'name' => [
                    'required',
                    'min:5',
                    'max:64',
                    'unique:roles'
                ]
            ]);

        } catch (ValidationException $e) {
            flash()->error('Please fix the errors in the form.',
                [
                    'position' => 'top-center',
                    'timeout' => 5000,
                ],
                'Role Creation Failed');

            return back()->withErrors($e->validator)->withInput();
        }

        try {
            $validated['name'] = Str::of($validated['name'])->kebab();

            $role = Role::create($validated);

        } catch (RoleAlreadyExists $e) {
            flash()->error('The role already exists.',
                [
                    'position' => 'top-center',
                    'timeout' => 5000,
                ],
                'Role Creation Failed');

            return back()->withErrors($e->getMessage())->withInput();
        }

        $roleName = $role->name;

        flash()->success("Role $roleName successfully added!",
            [
                'position' => 'top-center',
                'timeout' => 5000,
            ],
            "Role Created");

        return to_route('admin.roles.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create')
            ->with('permissions', $permissions);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('admin.roles.show')
            ->with('role', $role);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {

        $permissions = Permission::all();
        $rolePermissions = $role->permissions()->get();

        return view('admin.roles.edit')
            ->with('role', $role)
            ->with('permissions', $permissions)
            ->with('rolePermissions', $rolePermissions);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Role $role, Request $request)
    {

        $request['name'] = Str::of($request['name'])->kebab() ?? null;

        try {

            $validated = $request->validate([
                'name' => [
                    'required',
                    'min:5',
                    'max:64',
                    Rule::unique(Role::class)->ignore($role),
                ]
            ]);

        } catch (ValidationException $e) {

            flash()->error('Please fix the errors in the form.',
                [
                    'position' => 'top-center',
                    'timeout' => 5000,
                ],
                'Role Update Failed');

            return back()->withErrors($e->validator)->withInput();
        }

        $validated['name'] = Str::of($validated['name'])->kebab();
        $validated['updated_at'] = now();

        try {

            $role->update($validated);
            // $role->save();

        } catch (RoleAlreadyExists $e) {

            flash()->error('The role already exists.',
                [
                    'position' => 'top-center',
                    'timeout' => 5000,
                ],
                'Role Creation Failed');

            return back()->withErrors($e->getMessage())->withInput();
        }

        $roleName = $role->name;

        flash()->success("Role $roleName updated successfully!",
            [
                'position' => 'top-center',
                'timeout' => 5000,
            ],
            "Role Updated");

        return to_route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role, Request $request)
    {

        $roleName = $role->name;

        $validated = $request->validate([
            'name' => [
                'required',
                Rule::exists('roles', 'name')
                    ->where('name', $roleName),
            ]
        ]);

        try {

            $role->delete();

        } catch (RoleAlreadyExists $e) {

            flash()->error('The deletion failed.',
                [
                    'position' => 'top-center',
                    'timeout' => 5000,
                ],
                'Role Delete Failed');

            return back()->withErrors($e->getMessage())->withInput();
        }

        flash()->success("Role $roleName successfully deleted!",
            [
                'position' => 'top-center',
                'timeout' => 5000,
            ],
            "Role Delete");

        return to_route('admin.roles.index');
    }

    public function delete(Role $role)
    {
        $permissions = Permission::all();

        return view('admin.roles.delete')
            ->with('role', $role)
            ->with('permissions', $permissions);
    }

    public function givePermission(Request $request, Role $role)
    {
        if ($role->hasPermissionTo($request->permission)) {

            return back()->with('message', 'Permission exists.');

        }

        $role->givePermissionTo($request->permission);

        return back()->with('message', 'Permission added.');
    }

}
