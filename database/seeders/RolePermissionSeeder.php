<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // 1. Buat Permission
        $permissions = [
            'view users',
            'view roles',
            'view permissions',

        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // 2. Buat Role
        $superadmin = Role::firstOrCreate(['name' => 'superadmin']);
        $admin      = Role::firstOrCreate(['name' => 'admin']);
        $user       = Role::firstOrCreate(['name' => 'user']);

        // 3. Assign Permission ke Role
        $superadmin->syncPermissions(Permission::all()); // full akses

        $admin->syncPermissions([
            'view users',
            'view roles',
        ]);

        $user->syncPermissions([
            'view users',
        ]);

        // 4. Buat User dan Assign Role
        $user1 = User::firstOrCreate(
            ['email' => 'superadmin@gmail.com'],
            ['name' => 'Super Admin', 'password' => Hash::make('password')]
        );
        $user1->assignRole('superadmin');

        $user2 = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            ['name' => 'Admin User', 'password' => Hash::make('password')]
        );
        $user2->assignRole('admin');

        $user3 = User::firstOrCreate(
            ['email' => 'user@gmail.com'],
            ['name' => 'Regular User', 'password' => Hash::make('password')]
        );
        $user3->assignRole('user');
    }
}
