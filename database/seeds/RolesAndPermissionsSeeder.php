<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit courses']);
        Permission::create(['name' => 'delete courses']);
        Permission::create(['name' => 'publish courses']);
        Permission::create(['name' => 'unpublish courses']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'coordinator']);
        $role->givePermissionTo(Permission::all());

        // or may be done by chaining
        $role = Role::create(['name' => 'employee']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
