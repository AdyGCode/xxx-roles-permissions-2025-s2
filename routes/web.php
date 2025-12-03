<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PermissionManagementController;
use App\Http\Controllers\Admin\RoleManagementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPageController::class, 'home'])
    ->name('home');

Route::get('about', [StaticPageController::class, 'about'])
    ->name('about');

//
//
//Route::get('posts', [PostController::class, 'index'])->name('posts.index');
//Route::get('posts/create', [PostController::class, 'create'])->name('posts.create'); // http://DOMAIN/posts/create
//Route::get('posts/{id}/edit}', [PostController::class, 'edit'])->name('posts.edit'); //http://DOMAIN/posts/123/edit
//Route::get('posts/{id}/delete}', [PostController::class, 'delete'])->name('posts.delete'); //http://DOMAIN/posts/123/delete (delete confirmation page)
//Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show'); // http://DOMAIN/posts/123
//
//Route::put('posts', [PostController::class, 'update'] )->name('posts.update'); // OR put
//Route::patch('posts', [PostController::class, 'update'] )->name('posts.update');
//Route::put('posts', [PostController::class, 'store'] )->name('posts.store');
//Route::delete('posts/{id}', [PostController::class, 'destory'] )->name('posts.destroy');
//
//
//Route::get('posts/{id}/delete}', [PostController::class, 'delete'])->name('posts.delete'); //http://DOMAIN/posts/123/delete (delete confirmation page)
//Route::resource('posts', PostController::class)
//    ->only(['index', 'edit']);



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->name('dashboard');
});

Route::middleware(['auth', 'verified', 'role:staff|admin|super-admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', [AdminController::class, 'index'])
            ->name('index');

        // Remove when administration of users is created
        Route::get('users', [AdminController::class, 'users'])->name('users');

        Route::middleware(['auth', 'verified', 'role:admin|super-admin'])
            ->group(function () {

                Route::resource('permissions', PermissionManagementController::class);

                Route::middleware(['auth', 'verified', 'permission:role-permission-update'])
                    ->group(function () {

                        Route::post('/roles/{role}/permissions',
                            [RoleManagementController::class, 'givePermission'])
                            ->name('roles.permissions');
                    });

                Route::get('roles/{role}/delete', [RoleManagementController::class, 'delete'])
                    ->name('roles.delete');

                Route::resource('roles', RoleManagementController::class);
                // ->except(['delete','destroy'])
                //->only(['index', 'show']);
            });

        Route::middleware(['auth', 'verified', 'role:staff|admin|super-admin'])
            ->group(function () {

                Route::resource('permissions', PermissionManagementController::class)
                    ->only(['index',]);

                Route::resource('roles', RoleManagementController::class)
                    ->only(['index', 'show',]);

            });

    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
