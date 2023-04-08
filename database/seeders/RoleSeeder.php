<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        permission::create(['name' => 'admin.tareas.create'])-> syncRoles([$role1, $role2]);
        permission::create(['name' => 'admin.tareas.delete'])-> assignRole($role1);
        permission::create(['name' => 'admin.tareas.edit'])-> assignRole($role1);

        permission::create(['name' => 'admin.category.create'])-> syncRoles([$role1, $role2]);
        permission::create(['name' => 'admin.category.delete'])-> assignRole($role1);
        permission::create(['name' => 'admin.category.edit'])-> assignRole($role1);

       
    }
}
