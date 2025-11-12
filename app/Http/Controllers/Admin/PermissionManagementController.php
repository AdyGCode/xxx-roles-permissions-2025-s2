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
            new Middleware('permission:browse-permission|read-permission|edit-permission|add-permission|delete-permission',
                only: ['index', 'show',]),
            new Middleware('permission:add-permission', only: ['create', 'store',]),
            new Middleware('permission:edit-permission', only: ['edit', 'update',]),
            new Middleware('permission:delete-permission', only: ['delete', 'destroy',]),
        ];
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::orderBy('name')->paginate(10);
        return view('admin.permissions.index')
            ->with('permissions', $permissions);
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
