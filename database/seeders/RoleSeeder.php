<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Laravel\Prompts\Output\ConsoleOutput;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Symfony\Component\Console\Helper\ProgressBar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $start = now();

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $seedPermissions = [

            'browse post',
            'read any post',
            'read own post',
            'read any unpublished post',
            'read own unpublished post',
            'edit any post',
            'edit own post',
            'add post',
            'delete any post',
            'delete own post',
            'publish any post',
            'publish own post',
            'restore any post',
            'restore own post',
            'trash any post',
            'trash own post',


            'browse user',
            'read user',
            'edit user',
            'add user',
            'delete user',

            'browse permission',
            'read permission',
            'edit permission',
            'add permission',
            'delete permission',

            'browse role',
            'read role',
            'edit role',
            'add role',
            'delete role',

        ];

        $output = new ConsoleOutput();
        $progress = new ProgressBar($output, count($seedPermissions));
        $output->writeln("");
        $output->writeln('Seed Permissions');
        $progress->start();

        foreach ($seedPermissions as $newPermission) {

            $newPermission = Str::of($newPermission)->kebab();

            $permission = Permission::firstOrCreate(['name' => $newPermission]);
            $progress->advance();
        }

        $progress->finish();
        $output->writeln('');

        $output->writeln('Create Roles with Permissions');
        $output->writeln('');

        /* Create Super-Admin Role and Sync Permissions */

        $progress = new ProgressBar($output, 4);
        $output->writeln("");
        $output->writeln('Grant Permissions to Roles');
        $progress->start();

        $roleSuperAdmin = Role::firstOrCreate(['name' => 'super-user']);

        $roleSuperAdmin->syncPermissions();
        $progress->advance();

        /* Create Admin Role and Sync Permissions */

        $roleAdmin = Role::firstOrCreate(['name' => 'admin']);

        $adminPermissions = [
            'browse user', 'read user', 'edit user', 'add user', 'delete user',
            'browse post', 'read any post', 'read own post',
            'read any unpublished post', 'read own unpublished post',
            'edit any post', 'edit own post', 'add post', 'delete any post',
            'delete own post', 'publish any post', 'publish own post', 'restore any post',
            'restore own post', 'trash any post', 'trash own post',
            'browse permission', 'read permission', 'edit permission', 'add permission', 'delete permission',
            'browse role', 'read role', 'edit role', 'add role', 'delete role',
        ];

        foreach ($adminPermissions as $key => $permission) {
            $adminPermissions[$key] = Str::of($permission)->kebab();
        }

        $roleAdmin->syncPermissions($adminPermissions);
        $progress->advance();

        /* Create Staff Role and Sync Permissions */

        $roleStaff = Role::firstOrCreate(['name' => 'staff']);

        $staffPermissions = [
            'browse user', 'read user', 'edit user', 'add user', 'delete user',
            'browse permission', 'read permission',
            'browse role', 'read role',
            'browse post', 'read any post', 'read own post',
            'read any unpublished post', 'read own unpublished post',
            'edit any post', 'edit own post', 'add post', 'delete any post',
            'delete own post', 'publish any post', 'publish own post', 'restore any post',
            'restore own post', 'trash any post', 'trash own post',
        ];

        foreach ($staffPermissions as $key => $permission) {
            $staffPermissions[$key] = Str::of($permission)->kebab();
        }

        $roleStaff->syncPermissions($staffPermissions);
        $progress->advance();

        /* Create Client Role and Sync Permissions */

        $roleClient = Role::firstOrCreate(['name' => 'client']);

        $clientPermissions = [
            'browse post', 'read own post',
            'read own unpublished post',
            'edit own post', 'add post', 'delete own post',
            'publish own post', 'restore own post', 'trash own post',
        ];

        foreach ($clientPermissions as $key => $permission) {
            $clientPermissions[$key] = Str::of($permission)->kebab();
        }

        $roleClient->syncPermissions($clientPermissions);
        $progress->advance();

        $progress->finish();
        $output->writeln(" ");

        /* Permission-less Roles */

        $output->writeln("Adding roles, without permissions");

        $seedRoles = [
            ['name' => 'guest'],
        ];

        $output = new ConsoleOutput();
        $progress = new ProgressBar($output, count($seedRoles));
        $output->writeln("");
        $output->writeln('Seed Permissionless Roles');
        $progress->start();

        foreach ($seedRoles as $seedRole) {
            Role::create($seedRole);
            $progress->advance();
        }
        $progress->finish();
        $output->writeln('');


        $time = $start->diffInSeconds(now());
        $output->writeln("Roles & Permissions completed: $time seconds");
        $output->writeln(" ");

    }
}
