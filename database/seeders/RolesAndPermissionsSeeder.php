<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $superAdmin = Role::create(['name' => 'super-admin']);
        $restaurantAdmin = Role::create(['name' => 'restaurant-admin']);
        $customer = Role::create(['name' => 'customer']);
        $restaurantWorker = Role::create(['name' => 'restaurant-worker']);

        // Create permissions
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'manage restaurants']);
        Permission::create(['name' => 'manage qr codes']);

        // Assign permissions to roles
        $superAdmin->givePermissionTo(Permission::all());
        $restaurantAdmin->givePermissionTo(['manage users', 'manage qr codes']);
    }
}
