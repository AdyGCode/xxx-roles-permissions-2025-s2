<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Spatie\Permission\Models\Permission;

class PermissionManagementController extends Controller implements HasMiddleware
{


    public static function middleware(): array
    {
        return [
            new Middleware('permission:permission-browse|read-permission|permission-edit|permission-add|permission-delete',
                only: ['index', 'show',]),
            new Middleware('permission:permission-add', only: ['create', 'store',]),
            new Middleware('permission:permission-edit', only: ['edit', 'update',]),
            new Middleware('permission:permission-delete', only: ['delete', 'destroy',]),
        ];
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validated = $request->validate([
            'search' => [
                'nullable',
                'max:64',
                'string'
            ],
        ]);

        $search = $validated['search'] ?? '';

        // $permissions = Permission::where('name', 'like', "%{$search}%")
        //                ->orWhere('guard_name', 'like', $search)
        // is replaced by the whereAny!
        $permissions = Permission::whereAny(['guard_name', 'name'], 'like', "%{$search}%")
            ->orderBy('name')
            ->paginate(10);

        return view('admin.permissions.index')
            ->with('permissions', $permissions)
            ->with('search', $search);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.permissions.not-implemented')
            ->with('actionName', 'Add & Store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('admin.permissions.not-implemented')
            ->with('actionName', 'Add & Store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.permissions.not-implemented')
            ->with('actionName', 'Show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        return view('admin.permissions.not-implemented')
            ->with('actionName', 'Edit & Update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('admin.permissions.not-implemented')
            ->with('actionName', 'Edit & Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('admin.permissions.not-implemented')
            ->with('actionName', 'Delete & Destroy');
    }
}
