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
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'admin']);

        // $role = Role::create(['name' => 'dosen'])
        //     ->givePermissionTo(['dosen']);

        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'dosen']);
        $role = Role::create(['name' => 'mahasiswa']);
        $role = Role::create(['name' => 'atasan']);
        $role = Role::create(['name' => 'teman_sejawat']);
        $role->givePermissionTo(Permission::all());
    }
}
