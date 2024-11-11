<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #### Admin #####

        // Define permissions for Admin
        $permissionsAdmin = [
            'create video',
            'delete video',
            'publish video',
            'view video',
        ];

        // Create permissions for admin
        foreach ($permissionsAdmin as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create or fetch the role
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        // Assign permissions to the role
        $adminRole->syncPermissions($permissionsAdmin); // Replace existing permissions



        #### user #####
        // Define permissions for User
        $permissionsUser = [
            'comment video',
            'like video',
        ];
        // Create permissions for user
        foreach ($permissionsUser as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
        // Create or fetch the role
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Assign permissions to the role
        $userRole->syncPermissions($permissionsUser); // Replace existing permissions


        //asignar role admin a usuario admin
         // Create an admin user and assign the 'admin' role
         $adminUser = User::create([
            'name' => 'Administrador',
            'email' => 'admin@courses.com',
            'date_of_birth' => '1993/02/16',
            'email_verified_at' => now(),
            'password' =>  Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $adminUser->assignRole($adminRole); // Assign the 'admin' role to the user
        $adminUser->givePermissionTo('comment video');

    }
}
