<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Todo Creación de roles
        $role_admin = Role::create(['name' => 'Admin']);
        $role_editor = Role::create(['name' => 'Editor']);

        Permission::create(['name' => 'admin.home.index'])->syncRoles([$role_admin, $role_editor]);

        //Todo Creación de permisos - Contactanos
        Permission::create(['name' => 'admin.contact-us-general.index'])->assignRole('Admin','Editor');
        Permission::create(['name' => 'admin.contact-us-general.create'])->assignRole('Admin','Editor');
        Permission::create(['name' => 'admin.contact-us-general.edit'])->assignRole('Admin','Editor');

        //Todo Creación de permisos - Categorias
        Permission::create(['name' => 'admin.categories.index'])->assignRole('Admin','Editor');
        Permission::create(['name' => 'admin.categories.create'])->assignRole('Admin','Editor');
        Permission::create(['name' => 'admin.categories.edit'])->assignRole('Admin','Editor');

        //Todo Creación de permisos - Servicios
        Permission::create(['name' => 'admin.services.index'])->assignRole('Admin','Editor');
        Permission::create(['name' => 'admin.services.create'])->assignRole('Admin','Editor');
        Permission::create(['name' => 'admin.services.edit'])->assignRole('Admin','Editor');

        //Todo Creación de permisos - Datos principales de la compañia
        Permission::create(['name' => 'admin.company_principles.index'])->assignRole('Admin','Editor');
        Permission::create(['name' => 'admin.company_principles.create'])->assignRole('Admin','Editor');
        Permission::create(['name' => 'admin.company_principles.edit'])->assignRole('Admin','Editor');

        //Todo Creación de permisos - Certificaciones
        Permission::create(['name' => 'admin.certifications.index'])->assignRole('Admin','Editor');
        Permission::create(['name' => 'admin.certifications.create'])->assignRole('Admin','Editor');
        Permission::create(['name' => 'admin.certifications.edit'])->assignRole('Admin','Editor');

        //Todo Creación de permisos - Usuarios
        Permission::create(['name' => 'admin.users.index'])->assignRole('Admin');
        Permission::create(['name' => 'admin.users.create'])->assignRole('Admin');
        Permission::create(['name' => 'admin.users.edit'])->assignRole('Admin');
    }
}
